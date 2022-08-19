<template>
  <div class="the-text-type">
    {{ text }}
  </div>
</template>

<script>
export default {
  name: "TheTextType",
  props: {
    text: {
      type: String,
      required: true,
    },
  },
}
</script>

<style lang="scss" scoped>
.the-text-type {
  font-size: 40px;
  font-weight: 300;
  color: white;
}
</style>
