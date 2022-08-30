<template>
  <div class="app-pong-loader">
    <div class="app-pong-loader__player-one"></div>
    <div class="app-pong-loader__player-two"></div>
    <div class="app-pong-loader__ball"></div>
  </div>
</template>

<script>
export default {
  name: "AppPongLoader",
}
</script>

<style lang="scss" scoped>
.app-pong-loader {
  width: 205px;
  display: block;

  .app-pong-loader__player {
    position: relative;
    height: 40px;
    width: 3px;
    background-color: white;
  }

  .app-pong-loader__player-one {
    @extend .app-pong-loader__player;

    left: 0;
    animation: movePlayerOne 2s infinite;
  }

  .app-pong-loader__player-two {
    @extend .app-pong-loader__player;

    left: 203px;
    animation: movePlayerTwo 2s infinite;
  }

  .app-pong-loader__ball {
    position: relative;
    height: 5px;
    width: 5px;
    left: 180px;
    border-radius: 50%;
    background-color: white;
    animation: moveBall 2s infinite linear;
  }
}

@keyframes movePlayerOne {
  0%, 100% {
    transform: translate(0px, 100px);
  }

  25% {
    transform: translate(0px, 0px);
  }

  50% {
    transform: translate(0px, 0px);
  }

  75% {
    transform: translate(0px, 100px);
  }
}

@keyframes movePlayerTwo {
  0%, 100% {
    transform: translate(0px, -50px);
  }

  25% {
    transform: translate(0px, 10px);
  }

  50% {
    transform: translate(0px, 0px);
  }

  75% {
    transform: translate(0px, 50px);
  }
}

@keyframes moveBall {
  0%, 100% {
    transform: translate(-180px, 30px);
  }

  25% {
    transform: translate(18px, -25px);
  }

  50% {
    transform: translate(-180px, -55px);
  }

  75% {
    transform: translate(18px, 15px);
  }
}
</style>
