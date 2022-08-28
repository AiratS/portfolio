<template>
  <div class="the-profile">
    <div class="the-profile__content">
      <div class="the-profile__avatar">
        <img
          class="the-profile__avatar-img"
          src="../../assets/images/avatar.jpeg"
          alt="avatar"
        />
      </div>
      <div class="the-profile__info">
        <div class="the-profile__i-am">
          {{ profile.iAm }}
        </div>
        <div class="the-profile__full-name">
          {{ profile.fullName }}
        </div>
        <div class="the-profile__specialty">
          <the-text-type :text="profile.specialty"></the-text-type>
        </div>
        <div class="the-profile__cv">
          <app-button>
            {{ profile.cvLabel }}
          </app-button>
        </div>
      </div>
    </div>
    <div class="the-profile__go-down">
      <app-bounce-down
        class="the-profile__bounce-down"
        :anchor="downAnchor"
      />
    </div>
  </div>
</template>

<script>
import TheTextType from "./TheTextType";
import AppButton from "./AppButton";
import AppBounceDown from "./AppBounceDown";

export default {
  name: "TheProfile",
  components: {
    AppBounceDown,
    AppButton,
    TheTextType,
  },
  props: {
    downAnchor: {
      type: String,
      required: true,
    },
  },
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
