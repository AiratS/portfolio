<template>
  <div class="home-view">
    <app-header/>
    <the-profile/>
    <the-about-me/>
    <the-education-experience/>
    <the-contact-me/>
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
}
</script>
