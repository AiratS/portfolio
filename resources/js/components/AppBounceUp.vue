<template>
  <div class="app-bounce-up">
    <div class="app-bounce-up__arrow app-bounce-up__arrow_padding_top">
      <div class="app-bounce-up__line app-bounce-up__line_left"></div>
      <div class="app-bounce-up__line app-bounce-up__line_right"></div>
    </div>
    <div class="app-bounce-up__arrow app-bounce-up__arrow_margin_top">
      <div class="app-bounce-up__line app-bounce-up__line_left"></div>
      <div class="app-bounce-up__line app-bounce-up__line_right"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AppBounceUp"
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.app-bounce-up {
  width: 26px;
  height: 44px;
  border: 1px solid $app-black;
  border-radius: 100px;
  cursor: pointer;
  transition: background-color 0.3s ease-out;
  animation: 1s infinite alternate ease bounce;

  &:hover {
    background-color: $app-black;

    .app-bounce-up__line {
      background-color: white !important;
    }
  }

  .app-bounce-up__arrow {
    position: relative;
    margin-left: 5px;

    .app-bounce-up__line {
      position: absolute;
      width: 10px;
      height: 3px;
      background-color: $app-black;
    }

    .app-bounce-up__line_left {
      transform: rotate(-45deg);
    }

    .app-bounce-up__line_right {
      transform: rotate(45deg);
      left: 5px;
    }
  }

  .app-bounce-up__arrow_padding_top {
    padding-top: 16px;
  }

  .app-bounce-up__arrow_margin_top {
    margin-top: 7px;
  }
}

@keyframes bounce {
  from {
    margin-top: 0;
  }

  to {
    margin-top: 50px;
  }
}
</style>
