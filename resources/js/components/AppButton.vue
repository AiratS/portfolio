<template>
  <button
    class="app-button"
    :class="modifiers"
    :style="{ width, height }"
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
      const classes = [];

      classes.push(WHITE_GREEN === this.variant
        ? 'app-button_variant_white-green'
        : 'app-button_variant_green-white');

      if (this.disabled) {
        classes.push('app-button_disabled');
      }

      return classes;
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
  transition: background-color 0.2s ease-out;
}

.app-button_variant_white-green {
  border: 1px solid $app-green;
  background-color: white;
  color: $app-green;

  &:hover {
    background-color: $app-green;
    color: white;
  }
}

.app-button_variant_green-white {
  border: 1px solid white;
  background-color: $app-green;
  color: white;

  &:hover {
    background-color: white;
    color: black;
  }
}

.app-button_disabled {
  opacity: 0.8;
  cursor: default;
  background-color: transparent;

  &.app-button_variant_white-green:hover {
    border: 1px solid $app-green;
    background-color: white;
    color: $app-green;
  }

  &.app-button_variant_green-white:hover {
    border: 1px solid white;
    background-color: $app-green;
    color: white;
  }
}
</style>
