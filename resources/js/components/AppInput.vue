<template>
  <div class="app-input">
    <input
      class="app-input__input"
      :class="{ 'app-input__input_error': !!error }"
      :value="modelValue"
      :type="type"
      :placeholder="placeholder"
      @input="handleInput"
    />
    <div
      v-show="error"
      class="app-input__error"
    >
      {{ error }}
    </div>
  </div>
</template>

<script>
export default {
  name: "AppInput",
  props: {
    modelValue: null,
    type: {
      type: String,
      default: 'text',
    },
    placeholder: {
      type: String,
      required: false,
    },
    error: {
      type: String,
      required: false,
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

.app-input {
  width: 100%;

  .app-input__input {
    width: stretch;
    height: 50px;
    padding-left: 26px;
    padding-right: 26px;
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

  .app-input__input_error {
    border-color: $app-red;
    outline-color: $app-red;

    &:focus {
      outline: 0;
      border: 1px solid $app-red;
      box-shadow: 0 0 4px $app-red;
    }
  }

  .app-input__error {
    margin-top: 3px;
    font-size: 16px;
    text-align: center;
    color: $app-red;
  }
}
</style>
