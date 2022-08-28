<template>
  <app-page-section>
    <template #background>
      Contact
    </template>
    <template #title>
      Contact me
    </template>
    <div class="the-contact-me-content">
      <div class="the-contact-me-content__name-email">
        <app-input
          class="the-contact-me-content__field"
          placeholder="Name"
          v-model="name"
        />
        <app-input
          class="the-contact-me-content__field"
          placeholder="Email"
          v-model="email"
        />
      </div>
      <app-input
        class="the-contact-me-content__field"
        placeholder="Subject"
        v-model="subject"
      />
      <app-textarea
        class="the-contact-me-content__field"
        placeholder="Message"
        v-model="message"
      />
      <app-button
        class="the-contact-me-content__submit"
        variant="white-green"
      >
        Send message
      </app-button>
    </div>
  </app-page-section>
</template>

<script>
import AppInput from "./AppInput";
import AppTextarea from "./AppTextarea";
import AppButton from "./AppButton";
import AppPageSection from "../layouts/AppPageSection";

export default {
  name: "TheContactMe",
  components: {
    AppPageSection,
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
  width: 730px;
  margin-left: auto;
  margin-right: auto;

  .the-contact-me-content__name-email {
    display: flex;
    justify-content: space-between;

    .the-contact-me-content__field {
      width: 49%;
    }
  }

  .the-contact-me-content__field {
    margin-bottom: 15px;
  }

  .the-contact-me-content__submit {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
}

@media (max-width: 1200px) {
  .the-contact-me-content {
    width: 610px;
  }
}

@media (max-width: 768px) {
  .the-contact-me-content {
    width: 100%;

    .the-contact-me-content__name-email {
      flex-direction: column;

      .the-contact-me-content__field {
        width: 100%;
      }
    }
  }
}
</style>
