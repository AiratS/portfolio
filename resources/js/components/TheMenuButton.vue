<template>
  <div class="the-menu-button">
    <div class="the-menu-button__line"></div>
    <div class="the-menu-button__line"></div>
    <div class="the-menu-button__line"></div>
  </div>
</template>

<script>
export default {
  name: "TheMenuButton",
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.the-menu-button {
  width: fit-content;
  height: fit-content;
  padding: 10px 15px 4px 15px;;
  border: 1px solid $app-grey;
  border-radius: 4px;
  cursor: pointer;

  .the-menu-button__line {
    width: 26px;
    height: 2px;
    background-color: $app-dark-grey;
    border-radius: 2px;
    margin-bottom: 6px;
  }
}

.the-menu-button:hover {
  border-width: 1px;
  border-color: $app-blue;
}
</style>
