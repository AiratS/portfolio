<template>
  <div class="app-textarea">
    <textarea
      class="app-textarea__textarea"
      :value="modelValue"
      :placeholder="placeholder"
      @input="handleInput"
    ></textarea>
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
    width: 100%;
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
}
</style>
