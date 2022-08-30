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
        title="Образование"
        :points="education"
      ></historical-points>
      <historical-points
        class="the-education-experience-content__historical-points"
        title="Опыт"
        :points="experience"
      ></historical-points>
    </div>
  </app-page-section>
</template>

<script>
import { mapState } from "vuex";
import AppPageSection from "../layouts/AppPageSection";
import HistoricalPoints from "./HistoricalPoints";

export default {
  name: "TheEducationExperience",
  components: {
    AppPageSection,
    HistoricalPoints,
  },
  computed: {
    ...mapState([
      'education',
      'experience',
    ]),
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
