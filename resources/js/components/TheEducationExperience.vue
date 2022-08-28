<template>
  <app-page-section>
    <template #background>
      Quality
    </template>
    <template #title>
      Education & Experience
    </template>
    <div class="the-education-experience-content">
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
  </app-page-section>
</template>

<script>
import HistoricalPoints from "./HistoricalPoints";
import AppPageSection from "../layouts/AppPageSection";

export default {
  name: "TheEducationExperience",
  components: {
    AppPageSection,
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

@media (max-width: 992px) {
  .the-education-experience-content {
    flex-direction: column;

    .the-education-experience-content__historical-points {
      padding-left: 0;
      width: 100%;
    }
  }
}
</style>
