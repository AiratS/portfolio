<template>
  <button
    class="app-button"
    :class="modifiers"
    :style="styles"
    :disabled="disabled"
  >
    <slot></slot>
  </button>
</template>

<script>
const WHITE_GREEN = 'white-green';
const GREEN_WHITE = 'green-white';

export default {
  name: "AppButton",
  props: {
    width: {
      type: String,
      default: '150px',
    },
    height: {
      type: String,
      default: '46px',
    },
    disabled: {
      type: Boolean,
      default: false,
    },
    variant: {
      type: String,
      default: GREEN_WHITE,
    },
  },
  computed: {
    modifiers() {
      return WHITE_GREEN === this.variant
        ? 'apt-button_variant_white-green'
        : 'apt-button_variant_green-white';
    },
    styles() {
      return {
        'width': this.width,
        'height': this.height,
      };
    },
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.app-button {
  border-radius: 9999px;
  font-size: 16px;
  font-weight: 400;
  cursor: pointer;
}

.apt-button_variant_white-green {
  border: 1px solid $app-green;
  background-color: white;
  color: $app-green;

  &:hover {
    background-color: $app-green;
    color: white;
  }
}

.apt-button_variant_green-white {
  border: 1px solid white;
  background-color: $app-green;
  color: white;

  &:hover {
    background-color: white;
    color: black;
  }
}
</style>
