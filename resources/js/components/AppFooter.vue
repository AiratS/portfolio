<template>
  <div class="app-footer">
    <div class="app-footer__socials">
      <app-social
        v-for="(item, index) in socials"
        :key="index"
        :link="item"
      />
    </div>
    <div class="app-footer__links">
        <a
          v-for="(link, index) in links"
          :key="index"
          class="app-footer__link"
          href="#"
        >
          {{ link.text }}
        </a>
    </div>
    <div class="app-footer__rights">
      © Domain Name. All Rights Reserved. Designed by HTML Codex
    </div>
  </div>
</template>

<script>
import AppSocial from "./AppSocial";

export default {
  name: "AppFooter",
  components: {AppSocial},
  data() {
    return {
      socials: [
        {
          icon: '../../assets/images/github-icon-32.png',
          link: 'ya.ru',
        },
        {
          icon: '../../assets/images/github-icon-32.png',
          link: 'ya.ru',
        },
        {
          icon: '../../assets/images/github-icon-32.png',
          link: 'ya.ru',
        },
      ],
      links: [
        {
          text: 'Privacy',
        },
        {
          text: 'Privacy',
        },
        {
          text: 'Privacy',
        },
        {
          text: 'Privacy',
        },
      ],
    };
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.app-footer {
  width: 100%;
  margin-top: 90px;
  padding-top: 96px;
  padding-bottom: 96px;
  background-color: $app-green;

  .app-footer__socials {
    display: flex;
    gap: 8px;
    width: fit-content;
    margin-left: auto;
    margin-right: auto;
    cursor: pointer;
  }

  .app-footer__links {
    text-align: center;
    margin-top: 30px;

    .app-footer__link {
      padding-left: 15px;
      padding-right: 15px;
      border-right: 2px solid white;
      font-size: 16px;
      font-weight: 400;
      color: white;
      text-decoration: none;
    }

    .app-footer__link:hover {
      text-decoration: underline;
    }

    .app-footer__link:first-child {
      padding-left: 0;
    }

    .app-footer__link:last-child {
      padding-right: 0;
      border-right: none !important;
    }
  }

  .app-footer__rights {
    margin-top: 25px;
    text-align: center;
    font-size: 16px;
    font-weight: 400;
    color: white;
  }
}
</style>
