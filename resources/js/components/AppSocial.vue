<template>
  <div class="app-social">
    <a
      class="app-social__link"
      :href="link.link"
    >
      <img
        class="app-social__icon"
        src="../../assets/images/github-icon-32.png"
        alt="social-icon"
      />
    </a>
  </div>
</template>

<script>
export default {
  name: "AppSocial",
  props: {
    link: {
      type: Object,
      required: true,
    },
  },
}
</script>

<style lang="scss" scoped>
.app-social {
  width: 45px;
  height: 45px;
  background-color: white;
  border-radius: 45px;

  .app-social__icon {
    display: block;
    width: 32px;
    padding-top: 6px;
    margin-left: auto;
    margin-right: auto;
  }
}

.app-social:hover {
  background-color: #ececec;
}
</style>
