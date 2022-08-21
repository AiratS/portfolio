<template>
  <div class="home-view">
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

export default {
  name: "HomeView",
  components: {
    AppFooter,
    TheContactMe,
    TheEducationExperience,
    TheAboutMe,
    TheProfile,
  },
}
</script>
