<template>
  <app-error-layout>
    <template #http-code>
      404
    </template>
    <template #text>
      Уупс! Это не то, что вы искали
    </template>

    Испытайте свою удачу, вернувшись на
    <router-link class="home-link" :to="{ name: 'home' }">
      главную страницу
    </router-link>.
  </app-error-layout>
</template>

<script>
import AppErrorLayout from "../layouts/AppErrorLayout";

export default {
  name: "NotFoundView",
  components: {
    AppErrorLayout,
  },
}
</script>

<style lang="scss" scoped>
.home-link {
  text-decoration: none;

  @media (max-width: 768px) {
    display: block;
  }
}
</style>
