<script>
import useVuelidate from '@vuelidate/core'

export default {
  name: "ValidatorMixin",
  setup() {
    return {
      v$: useVuelidate(),
    };
  },
  methods: {
    getValidationMessage(field, validator) {
      return this.v$[field][validator].$invalid
        ? this.v$[field][validator].$message
        : null;
    },
    getRequiredValidationMessage(field) {
      return this.getValidationMessage(field, 'required');
    },
    getEmailValidationMessage(field) {
      return this.getValidationMessage(field, 'email');
    },
  },
}
</script>
