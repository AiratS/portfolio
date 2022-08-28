<template>
  <div class="app-input">
    <input
      class="app-input__input"
      :value="modelValue"
      :type="type"
      :placeholder="placeholder"
      @input="handleInput"
    />
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
}
</style>
