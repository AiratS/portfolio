<template>
  <app-error-layout>
    <template #http-code>
      {{ httpCode }}
    </template>
    <template #text>
      Что то пошло не так...
    </template>
  </app-error-layout>
</template>

<script>
import AppErrorLayout from "../layouts/AppErrorLayout";

export default {
  name: "ErrorView",
  components: {
    AppErrorLayout,
  },
  computed: {
    httpCode() {
      return this.$route.params.code;
    }
  },
}
</script>
