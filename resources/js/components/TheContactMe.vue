<template>
  <app-page-section>
    <template #background>
      Contact
    </template>
    <template #title>
      Contact me
    </template>
    sdfadsf
  </app-page-section>
</template>

<script>
import AppInput from "./AppInput";
import AppTextarea from "./AppTextarea";
import AppButton from "./AppButton";
import AppPageSection from "../layouts/AppPageSection";

export default {
  name: "TheContactMe",
  components: {
    AppPageSection,
    AppButton,
    AppInput,
    AppTextarea,
  },
  data() {
    return {
      name: null,
      email: null,
      subject: null,
      message: null,
    };
  },
}
</script>

<style lang="scss" scoped>
</style>
