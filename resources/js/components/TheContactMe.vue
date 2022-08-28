<template>
  <app-page-section>
    <template #background>
      Contact
    </template>
    <template #title>
      Contact me
    </template>
    <div class="the-contact-me-content">
      <app-alert
        class="the-contact-me-content__alert"
        ref="the-contact-me-content__alert"
        message="Ваше письмо успешно отправлено"
      />

      <div class="the-contact-me-content__name-email">
        <app-input
          class="the-contact-me-content__field"
          placeholder="Name"
          :error="nameError"
          v-model="name"
        />
        <app-input
          class="the-contact-me-content__field"
          placeholder="Email"
          :error="emailError"
          v-model="email"
        />
      </div>
      <app-input
        class="the-contact-me-content__field"
        placeholder="Subject"
        :error="subjectError"
        v-model="subject"
      />
      <app-textarea
        class="the-contact-me-content__field"
        placeholder="Message"
        :error="messageError"
        v-model="message"
      />
      <app-button
        class="the-contact-me-content__submit"
        variant="white-green"
        :disabled="!isFirstSubmit && v$.$invalid"
        @click="onSubmitted"
      >
        Send message
      </app-button>
    </div>
  </app-page-section>
</template>

<script>
import useVuelidate from '@vuelidate/core'
import { required, email, helpers } from '@vuelidate/validators'
import AppInput from "./AppInput";
import AppTextarea from "./AppTextarea";
import AppButton from "./AppButton";
import AppPageSection from "../layouts/AppPageSection";
import ValidatorMixin from "../mixins/ValidatorMixin";
import AppAlert from "./AppAlert";

// TODO: make more universal way of resolving custom messages
const requiredMessage = helpers.withMessage('Поле обязательно для заполнения', required);
const emailMessage = helpers.withMessage('Неверный адрес электронной почты', email);

export default {
  name: "TheContactMe",
  components: {
    AppAlert,
    AppPageSection,
    AppButton,
    AppInput,
    AppTextarea,
  },
  mixins: [ValidatorMixin],
  setup() {
    return {
      v$: useVuelidate(),
    };
  },
  data() {
    return {
      name: null,
      email: null,
      subject: null,
      message: null,
      isFirstSubmit: true,
    };
  },
  validations() {
    return {
      name: {
        required: requiredMessage,
      },
      email: {
        required: requiredMessage,
        email: emailMessage,
      },
      subject: {
        required: requiredMessage,
      },
      message: {
        required: requiredMessage,
      },
    };
  },
  computed: {
    nameError() {
      return this._getValidationMessage('name');
    },
    subjectError() {
      return this._getValidationMessage('subject');
    },
    messageError() {
      return this._getValidationMessage('message');
    },
    emailError() {
      if (this.isFirstSubmit) {
        return null;
      }

      return this.getRequiredValidationMessage('email')
        || this.getEmailValidationMessage('email');
    },
  },
  methods: {
    onSubmitted() {
      if (this.isFirstSubmit) {
        this.isFirstSubmit = false;
      }

      if (this.v$.$invalid) {
        return;
      }

      // TODO: add api request
      this.$refs['the-contact-me-content__alert'].show();
    },
    _getValidationMessage(field) {
      return !this.isFirstSubmit
        ? this.getRequiredValidationMessage(field)
        : null;
    },
  },
}
</script>

<style lang="scss" scoped>
.the-contact-me-content {
  width: 730px;
  margin-left: auto;
  margin-right: auto;

  .the-contact-me-content__alert {
    margin-bottom: 15px;
  }

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
