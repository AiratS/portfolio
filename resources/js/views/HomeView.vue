<template>
  <div class="home-view">
    <app-header :nav-items="navItems"/>

    <a name="profile"></a>
    <the-profile down-anchor="about" />

    <a name="about"></a>
    <the-about-me/>

    <a name="quality"></a>
    <the-education-experience/>

    <app-footer/>
  </div>
</template>

<script>
import TheProfile from "../components/TheProfile";
import TheAboutMe from "../components/TheAboutMe";
import TheEducationExperience from "../components/TheEducationExperience";
import TheContactMe from "../components/TheContactMe";
import AppFooter from "../components/AppFooter";
import AppHeader from "../components/AppHeader";

export default {
  name: "HomeView",
  components: {
    AppHeader,
    AppFooter,
    TheContactMe,
    TheEducationExperience,
    TheAboutMe,
    TheProfile,
  },
  data() {
    return {
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
      ],
    };
  },
}
</script>
