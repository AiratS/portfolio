<template>
  <div class="app-page-block">
    <div class="app-page-block__bg">
      About
    </div>
    <div class="app-page-block__main">
      <div class="app-page-block__title">
        About me
      </div>
      <div class="app-page-block__content the-about-me-content">
        <div class="the-about-me-content__photo">
          <img
            class="the-about-me-content__img"
            src="../../assets/images/the-about-me-photo.jpeg"
            alt="the-about-me-photo"
          />
        </div>
        <div class="the-about-me-content__personal">
          <div class="the-about-me-content__specialty">
            UI/UX Designer & Web Developer
          </div>
          <div class="the-about-me-content__info">
            Tempor eos dolore amet tempor dolor tempor.
            Dolore ea magna sit amet dolor eirmod.
            Eos ipsum est tempor dolor. Clita lorem kasd sed
            ea lorem diam ea lorem eirmod duo sit ipsum. Amet
            dolor stet lorem diam dolor justo et dolor dolor dolor
          </div>
          <div class="the-about-me-content__qualities">
            <the-qualities :qualities="qualities" />
          </div>
          <div class="the-about-me-content__buttons">
            <app-button variant="white-green">Hire me</app-button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import TheQualities from "./TheQualities";
import AppButton from "./AppButton";

export default {
  name: "TheAboutMe",
  components: {
    AppButton,
    TheQualities,
  },
  data() {
    return {
      qualities: [
        {
          type: 'Name',
          value: 'Kate'
        },
        {
          type: 'Name',
          value: 'Kate'
        },
        {
          type: 'Name',
          value: 'Kate'
        },
        {
          type: 'Name',
          value: 'Kate'
        },
      ]
    };
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/components/the-about-me";
</style>
