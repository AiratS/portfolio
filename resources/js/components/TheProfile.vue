<template>
  <div class="the-profile">
    <div class="the-profile__avatar">
      <img class="the-profile__avatar-img" src="../../assets/images/avatar.jpeg" alt="avatar">
    </div>
    <div class="the-profile__info">
      <div class="the-profile__i-am">
        {{ profile.iAm }}
      </div>
      <div class="the-profile__full-name">
        {{ profile.fullName }}
      </div>
      <div class="the-profile__specialty">
        {{ profile.specialty }}
      </div>
      <div class="the-profile__cv">
        <a href="{{ profile.cvUrl }}" target="_blank">
          {{ profile.cvLabel }}
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "TheProfile",
  data() {
    return {
      profile: {
        iAm: 'I\'m',
        avatar: '',
        fullName: 'KATE WINSLET',
        specialty: 'frontend developer',
        cvUrl: '#',
        cvLabel: 'Download CV',
      },
    };
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/components/the-profile";
</style>
