<template>
  <div class="historical-points">
    <div class="historical-points__title">
      {{ title }}
    </div>
    <div class="historical-points__map">
      <div
        v-for="(point, index) in points"
        :key="index"
        class="historical-points__map-item"
      >
        <div class="historical-points__target">
          <div class="historical-points__dot"></div>
        </div>
        <div class="historical-points__map-title">
          {{ point.title }}
        </div>
        <div class="historical-points__map-place">
        <span class="historical-points__map-place-name">
          {{ point.placeName }}
        </span>
          <span class="historical-points__map-years">
          {{ point.years }}
        </span>
        </div>
        <div class="historical-points__map-info">
          {{ point.info }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HistoricalPoints",
  props: {
    title: {
      type: String,
      required: true,
    },
    points: {
      type: Array,
      required: true,
    },
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.historical-points {
  width: 100%;

  .historical-points__title {
    font-size: 28px;
    font-weight: 700;
    color: $app-black;
  }

  .historical-points__map {
    margin-top: 24px;
    margin-left: 8px;
    border-left: 1px solid $app-green;

    .historical-points__map-item {
      position: relative;
      margin-bottom: 25px;
      padding-top: 10px;
      padding-left: 25px;

      .historical-points__target {
        position: absolute;
        width: 16px;
        height: 16px;
        left: -9px;
        border-radius: 8px;
        border: 1px solid $app-green;

        .historical-points__dot {
          width: 7px;
          height: 7px;
          margin-top: 5px;
          margin-left: 5px;
          border-radius: 3.5px;
          background-color: $app-green;
        }
      }

      .historical-points__map-title {
        margin-top: -3px;
        font-size: 20px;
        font-weight: 700;
        color: $app-black;
      }

      .historical-points__map-place {
        margin-top: 10px;
        color: $app-dark-grey;

        .historical-points__map-place-name {
          padding-right: 5px;
          font-size: 16px;
          font-weight: 700;
        }

        .historical-points__map-years {
          padding-left: 5px;
          border-left: 2px solid $app-dark-grey;
          font-size: 12.8px;
          font-weight: 400;
        }
      }

      .historical-points__map-info {
        margin-top: 10px;
        font-size: 16px;
        font-weight: 400;
        color: $app-dark-grey;
      }
    }
  }
}
</style>
