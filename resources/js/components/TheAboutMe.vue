<template>
  <app-page-section>
    <template #background>
      About
    </template>
    <template #title>
      About me
    </template>
    <div class="the-about-me-content">
      <div class="the-about-me-content__photo">
        <img
          class="the-about-me-content__img"
          :src="aboutMe.imagePath"
          alt="the-about-me-photo"
        />
      </div>
      <div class="the-about-me-content__personal">
        <div class="the-about-me-content__specialty">
          {{ aboutMe.speciality }}
        </div>
        <div class="the-about-me-content__info">
          {{ aboutMe.info }}
        </div>
        <div class="the-about-me-content__qualities">
          <the-qualities :qualities="aboutMe.qualities" />
        </div>
      </div>
    </div>
  </app-page-section>
</template>

<script>
import { mapState } from "vuex";
import AppPageSection from "../layouts/AppPageSection";
import AppButton from "./AppButton";
import TheQualities from "./TheQualities";

export default {
  name: "TheAboutMe",
  components: {
    AppPageSection,
    AppButton,
    TheQualities,
  },
  computed: {
    ...mapState(['aboutMe']),
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";
@import "../../styles/abstract/variables";

.the-about-me-content {
  display: flex;

  .the-about-me-content__img {
    width: 445px;
    height: 445px;
  }

  .the-about-me-content__personal {
    margin-left: 30px;
    padding-top: 35px;

    .the-about-me-content__specialty {
      font-size: 28px;
      font-weight: 700;
      color: $app-black;
    }

    .the-about-me-content__info {
      margin-top: 24px;
      font-size: 16px;
      font-weight: 400;
      line-height: 1.5;
      color: $app-dark-grey;
    }

    .the-about-me-content__qualities {
      margin-top: 24px;
    }
  }
}

@media (max-width: 1200px) {
  .the-about-me-content {
    .the-about-me-content__img {
      width: 370px;
      height: 370px;
    }
  }
}

@media (max-width: 992px) {
  .the-about-me-content {
    flex-direction: column;

    .the-about-me-content__img {
      width: 690px;
      height: 690px;
    }

    .the-about-me-content__personal {
      padding-top: 25px;
      margin-left: 0;
    }
  }
}

@media (max-width: 768px) {
  .the-about-me-content {
    .the-about-me-content__img {
      width: 100%;
      height: auto;
    }
  }
}

@media (max-width: 576px) {
  .the-about-me-content {
    .the-about-me-content__img {
      width: 100%;
      height: auto;
    }
  }
}
</style>
