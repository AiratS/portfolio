<template>
  <div class="home-view">
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
</template>

<script>
import { getPageHeight } from "../utils/page-height";
import TheProfile from "../components/TheProfile";
import TheAboutMe from "../components/TheAboutMe";
import TheEducationExperience from "../components/TheEducationExperience";
import TheContactMe from "../components/TheContactMe";
import AppFooter from "../components/AppFooter";
import AppHeader from "../components/AppHeader";
import AppBounceUp from "../components/AppBounceUp";

export default {
  name: "HomeView",
  components: {
    AppBounceUp,
    AppHeader,
    AppFooter,
    TheContactMe,
    TheEducationExperience,
    TheAboutMe,
    TheProfile,
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
    const pageHeight = getPageHeight();
    document.addEventListener('scroll', () => {
      this.isBounceUpVisible = pageHeight < window.scrollY;
    });
  },
}
</script>

<style lang="scss" scoped>
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
</style>
