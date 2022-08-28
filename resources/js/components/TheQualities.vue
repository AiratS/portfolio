<template>
  <div class="the-qualities">
    <div
      v-for="quality in qualities"
      :key="quality.type"
      class="the-qualities__quality"
    >
      <span class="the-qualities__type">
        {{ quality.type }}:
      </span>
      <span class="the-qualities__value">
        {{ quality.value }}
      </span>
    </div>
  </div>
</template>

<script>
export default {
  name: "TheQualities",
  props: {
    qualities: {
      type: Array,
      required: true,
    },
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.the-qualities {
  width: 100%;
  display: flex;
  flex-wrap: wrap;

  .the-qualities__quality {
    width: 50%;
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 20px;

    .the-qualities__type {
      color: $app-black;
    }

    .the-qualities__value {
      color: $app-dark-grey;
    }
  }
}

@media (max-width: 576px) {
  .the-qualities {
    flex-direction: column;
  }
}
</style>
