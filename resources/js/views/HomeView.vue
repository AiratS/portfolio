<template>
  <div
    v-if="profile"
    class="home-view"
  >
    <app-header :nav-items="navItems"/>

    <a name="profile"></a>
    <the-profile down-anchor="#about" />

    <a name="about"></a>
    <the-about-me/>

    <a name="quality"></a>
    <the-education-experience/>

    <a name="contact"></a>
    <the-contact-me/>

    <app-footer/>

    <div
      class="home-view__up"
      :class="{ 'home-view__up_visible': isBounceUpVisible }"
    >
      <app-bounce-up anchor="#profile"/>
    </div>
  </div>
  <div
    v-else
    class="loader"
  >
    <app-pong-loader class="loader__pong-loader"/>
  </div>
</template>

<script>
import { mapActions, mapState } from "vuex";
import { getPageHeight } from "../utils/page-height";
import AppHeader from "../components/AppHeader";
import AppFooter from "../components/AppFooter";
import AppPongLoader from "../components/AppPongLoader";
import AppBounceUp from "../components/AppBounceUp";
import TheProfile from "../components/TheProfile";
import TheAboutMe from "../components/TheAboutMe";
import TheEducationExperience from "../components/TheEducationExperience";
import TheContactMe from "../components/TheContactMe";

export default {
  name: "HomeView",

  components: {
    AppHeader,
    AppFooter,
    AppPongLoader,
    AppBounceUp,
    TheProfile,
    TheAboutMe,
    TheEducationExperience,
    TheContactMe,
  },

  data() {
    return {
      isBounceUpVisible: false,
      navItems: [
        {
          text: "Home",
          link: '#profile',
        },
        {
          text: "About",
          link: '#about',
        },
        {
          text: "Quality",
          link: '#quality',
        },
        {
          text: "Contact",
          link: '#contact',
        },
      ],
    };
  },

  created() {
    this.fetchHome().catch((error) => {
      console.log(error);
      this.$router.push({
        name: 'error',
        params: {
          code: `${error.response.status} - ${error.response.statusText}`,
        },
      });
    });

    const pageHeight = getPageHeight();
    document.addEventListener('scroll', () => {
      this.isBounceUpVisible = pageHeight < window.scrollY;
    });
  },

  computed: {
    ...mapState(['profile'])
  },

  methods: {
    ...mapActions(['fetchHome'])
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.home-view__up {
  position: fixed;
  display: none;
  height: 76px;
  bottom: 50px;
  right: 40px;
  z-index: 3;
  opacity: 0;
  transition: opacity .5s ease-in;
}

@media (max-width: 768px) {
  .home-view__up {
    right: 15px;
  }
}

.home-view__up_visible {
  display: block;
  opacity: 1;
}

.loader {
  width: 100%;
  height: 100vh;
  background-color: $app-green;

  .loader__pong-loader {
    padding-top: 35vh;
    margin-left: auto;
    margin-right: auto;
  }
}
</style>
