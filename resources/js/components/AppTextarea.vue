<template>
  <div class="app-textarea">
    <textarea
      class="app-textarea__textarea"
      :class="{ 'app-textarea__textarea_error': !!error }"
      :value="modelValue"
      :placeholder="placeholder"
      @input="handleInput"
    ></textarea>
    <div
      v-show="error"
      class="app-textarea__error"
    >
      {{ error }}
    </div>
  </div>
</template>

<script>
export default {
  name: "AppTextarea",
  props: {
    modelValue: null,
    placeholder: {
      type: String,
      required: false,
    },
    error: {
      type: String,
      required: false,
      default: 'some ajsdlkfjasd'
    },
  },
  methods: {
    handleInput(event) {
      this.$emit('update:modelValue', event.target.value);
    }
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.app-textarea {
  width: 100%;

  .app-textarea__textarea {
    width: stretch;
    height: 155px;
    padding: 20px 26px;
    resize: none;
    border: 1px solid $app-light-grey;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 400;
    outline-color: $app-green;

    &:focus {
      outline: 0;
      border: 1px solid $app-green;
      box-shadow: 0 0 4px $app-green;
    }
  }

  .app-textarea__textarea_error {
    border-color: $app-red;
    outline-color: $app-red;

    &:focus {
      outline: 0;
      border: 1px solid $app-red;
      box-shadow: 0 0 4px $app-red;
    }
  }

  .app-textarea__error {
    margin-top: 3px;
    font-size: 16px;
    text-align: center;
    color: $app-red;
  }
}
</style>
