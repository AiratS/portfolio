<template>
  <div class="app-bounce-down">
    <div class="app-bounce-down__arrow">
      <div class="app-bounce-down__line app-bounce-down__line_left"></div>
      <div class="app-bounce-down__line app-bounce-down__line_right"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AppBounceDown",
}
</script>

<style lang="scss" scoped>
.app-bounce-down {
  height: 20px;
  cursor: pointer;

  .app-bounce-down__arrow {
    position: relative;
    animation: 1s infinite alternate ease bounce;

    .app-bounce-down__line {
      position: absolute;
      width: 13px;
      height: 4px;
      background-color: white;
    }

    .app-bounce-down__line_left {
      transform: rotate(45deg);
    }

    .app-bounce-down__line_right {
      left: 8px;
      transform: rotate(-45deg);
    }
  }

  @keyframes bounce {
    from {
      top: 0;
    }

    to {
      top: 15px;
    }
  }
}
</style>
