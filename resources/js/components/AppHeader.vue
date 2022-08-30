<template>
  <div
    class="app-header"
    :class="modifiers"
    :style="styles"
  >
    <div class="app-header__content">
      <div class="app-header__logo">
        <a href="/" class="app-header__logo-link">
          <span class="app-header__port">Port</span>Folio
        </a>
      </div>
      <div class="app-header__nav-block">
        <ul class="app-header__nav">
          <li
            v-for="(item, index) in processedNavItems"
            :key="index"
            class="app-header__nav-item"
          >
            <a
              class="app-header__nav-link"
              :class="{ 'app-header__nav-link_active': item.active }"
              :href="item.link"
              @click="onNavItemClicked(item.text)"
            >
              {{ item.text }}
            </a>
          </li>
        </ul>
      </div>
      <a
        href="https://github.com/AiratS/portfolio"
        class="app-header__github"
      >
        <app-button variant="white-green">GitHub</app-button>
      </a>
      <the-menu-button
        class="app-header__menu"
        @click="onMenuClicked"
      />
    </div>
  </div>
</template>

<script>
import { getPageHeight } from "../utils/page-height";
import AppButton from "./AppButton";
import TheMenuButton from "./TheMenuButton";

const NAV_ITEM_HEIGHT_PX = 64;

export default {
  name: "AppHeader",

  components: {
    AppButton,
    TheMenuButton,
  },

  props: {
    alwaysVisible: {
      type: Boolean,
      required: false,
      default: false,
    },
    navItems: {
      type: Array,
      required: false,
      default: [],
    },
  },

  data() {
    return {
      isVisible: false,
      isExpanded: false,
      clickedNavItemText: null,
    };
  },

  created() {
    const halfHeight = getPageHeight() / 2;

    document.addEventListener('scroll', () => {
      this.isVisible = halfHeight < window.scrollY;

      if (!this.isVisible) {
        this.isExpanded = false;
      }
    });
  },

  computed: {
    modifiers() {
      if (this.alwaysVisible) {
        return 'app-header_always-visible';
      }

      return { 'app-header_visible': this.isVisible };
    },
    styles() {
      if (!this.isExpanded) {
        return null;
      }

      return {
        height: this.navHeight,
      };
    },
    navHeight() {
      return (NAV_ITEM_HEIGHT_PX * this.navItems.length) + 'px';
    },
    processedNavItems() {
      return this.navItems.map((item) => {
        return {
          text: item.text,
          link: item.link,
          active: this.clickedNavItemText === item.text,
        };
      });
    },
  },

  methods: {
    onNavItemClicked(text) {
      this.clickedNavItemText = text;
      this.isExpanded = false;
    },
    onMenuClicked() {
      this.isExpanded = !this.isExpanded;
    },
  },

  watch: {
    isVisible(value) {
      if (!value) {
        this.clickedNavItemText = null;
      }
    },
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";
@import "../../styles/abstract/variables";

.app-header {
  position: fixed;
  display: block;
  width: 100%;
  height: 74px;
  top: 0;
  left: 0;
  z-index: 3;
  background-color: white;
  box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
  opacity: 0;
  transition: opacity 0.5s ease-in, height 0.2s ease-in;

  .app-header__content {
    display: flex;
    justify-content: space-between;
    width: $app-header-content-width;
    padding-top: 13px;
    margin-left: auto;
    margin-right: auto;

    .app-header__logo {
      font-size: 40px;
      font-weight: 900;
      margin-left: 48px;

      .app-header__logo-link {
        text-decoration: none;
        color: $app-black !important;
      }

      .app-header__port {
        color: $app-green;
      }
    }

    .app-header__nav {
      display: flex;
      list-style-type: none;

      .app-header__nav-item {
        margin-left: 10px;
        margin-right: 10px;
        font-size: 16px;
        font-weight: 500;

        .app-header__nav-link {
          text-decoration: none;
          color: $app-black;
        }

        .app-header__nav-link:hover {
          color: $app-green;
        }

        .app-header__nav-link_active {
          color: $app-green;
        }
      }
    }

    .app-header__github {
      margin-right: 48px;
    }

    .app-header__menu {
      display: none;
    }
  }
}

@media (max-width: 1450px) {
  .app-header__content {
    width: 100% !important;
  }
}

@media (max-width: 960px) {
  .app-header {
    overflow: hidden;

    .app-header__content {
      position: relative;
      display: block;

      .app-header__logo {
        margin-left: 15px;
      }

      .app-header__nav-block {
        .app-header__nav {
          flex-direction: column;
          padding-left: 10px;
          margin-bottom: 2px;

          .app-header__nav-item {
            margin-bottom: 25px;
          }
        }
      }

      .app-header__github {
        display: none;
      }

      .app-header__menu {
        position: absolute;
        display: block;
        top: 13px;
        right: 0;
        margin-right: 10px;
      }
    }
  }
}

.app-header_visible {
  display: block;
  opacity: 1;
}

.app-header_always-visible {
  @extend .app-header_visible;
  position: relative !important;

  .app-header__github {
    display: block !important;
  }

  .app-header__menu {
    display: none !important;
  }
}
</style>
