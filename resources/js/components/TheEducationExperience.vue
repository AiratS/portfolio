<template>
  <div class="app-page-block">
    <div class="app-page-block__bg">
      Quality
    </div>
    <div class="app-page-block__main">
      <div class="app-page-block__title">
        Education & Experience
      </div>
      <div class="app-page-block__content the-education-experience-content">
        <historical-points
          class="the-education-experience-content__historical-points"
          :title="title"
          :points="points"
        ></historical-points>
        <historical-points
          class="the-education-experience-content__historical-points"
          :title="title"
          :points="points"
        ></historical-points>
      </div>
    </div>
  </div>
</template>

<script>
import HistoricalPoints from "./HistoricalPoints";

export default {
  name: "TheEducationExperience",
  components: {
    HistoricalPoints,
  },
  data() {
    return {
      title: 'My education',
      points: [
        {
          title: 'Title',
          placeName: 'Place name',
          years: '2020-2021',
          info: 'Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam'
        },
        {
          title: 'Title',
          placeName: 'Place name',
          years: '2020-2021',
          info: 'infasdfjasl aksdjfkas jfkjasdkfjhaslkdfh alkjhdflahdsljkfadfhjklasdhf o'
        },
        {
          title: 'Title',
          placeName: 'Place name',
          years: '2020-2021',
          info: 'infasdfjasl aksdjfkas jfkjasdkfjhaslkdfh alkjhdflahdsljkfadfhjklasdhf o'
        },
      ]
    };
  },
}
</script>

<style lang="scss" scoped>
.the-education-experience-content {
  display: flex;
  width: 100%;

  .the-education-experience-content__historical-points {
    padding-left: 30px;
    width: 50%;
  }
}
</style>
