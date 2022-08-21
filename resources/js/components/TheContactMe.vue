<template>
  <div class="app-page-block">
    <div class="app-page-block__bg">
      Contact
    </div>
    <div class="app-page-block__main">
      <div class="app-page-block__title">
        Contact me
      </div>
      <div class="app-page-block__content the-contact-me-content">
        <div class="the-about-me-content__form-control the-contact-me-content__name-email">
          <app-input
            class="the-contact-me-content__name"
            placeholder="Name"
            v-model="name"
          />
          <app-input
            class="the-contact-me-content__email"
            placeholder="Email"
            v-model="email"
          />
        </div>
        <app-input
          class="the-about-me-content__form-control"
          placeholder="Subject"
          v-model="subject"
        />
        <app-textarea
          class="the-about-me-content__form-control"
          placeholder="Subject"
          v-model="message"
        />
        <app-button
          class="the-about-me-content__button"
          variant="white-green"
        >
          Send message
        </app-button>
      </div>
    </div>
  </div>
</template>

<script>
import AppInput from "./AppInput";
import AppTextarea from "./AppTextarea";
import AppButton from "./AppButton";

export default {
  name: "TheContactMe",
  components: {
    AppButton,
    AppInput,
    AppTextarea,
  },
  data() {
    return {
      name: null,
      email: null,
      subject: null,
      message: null,
    };
  },
}
</script>

<style lang="scss" scoped>
.the-contact-me-content {
  width: 728px;
  margin-left: auto;
  margin-right: auto;

  .the-about-me-content__form-control {
    margin-bottom: 15px;
  }

  .the-contact-me-content__name-email {
    display: flex;
    justify-content: space-between;
    width: 100%;

    .the-contact-me-content__name {
      width: 45%;
      margin-right: 3px;
    }

    .the-contact-me-content__email {
      width: 45%;
      margin-left: 3px;
    }
  }

  .the-about-me-content__button {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
}
</style>
