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
          src="../../assets/images/the-about-me-photo.jpeg"
          alt="the-about-me-photo"
        />
      </div>
      <div class="the-about-me-content__personal">
        <div class="the-about-me-content__specialty">
          UI/UX Designer & Web Developer
        </div>
        <div class="the-about-me-content__info">
          Tempor eos dolore amet tempor dolor tempor.
          Dolore ea magna sit amet dolor eirmod.
          Eos ipsum est tempor dolor. Clita lorem kasd sed
          ea lorem diam ea lorem eirmod duo sit ipsum. Amet
          dolor stet lorem diam dolor justo et dolor dolor dolor
        </div>
        <div class="the-about-me-content__qualities">
          <the-qualities :qualities="qualities" />
        </div>
        <div class="the-about-me-content__buttons">
          <app-button
            width="108px"
            height="46px"
            variant="white-green"
          >
            Hire me
          </app-button>
        </div>
      </div>
    </div>
  </app-page-section>
</template>

<script>
import TheQualities from "./TheQualities";
import AppButton from "./AppButton";
import AppPageSection from "../layouts/AppPageSection";

export default {
  name: "TheAboutMe",
  components: {
    AppPageSection,
    AppButton,
    TheQualities,
  },
  data() {
    return {
      qualities: [
        {
          type: 'Name',
          value: 'Kate'
        },
        {
          type: 'Name',
          value: 'Kate'
        },
        {
          type: 'Name',
          value: 'Kate'
        },
        {
          type: 'Name',
          value: 'Kate'
        },
      ]
    };
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

    .the-about-me-content__buttons {
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

    .the-about-me-content__buttons {
      margin-top: 15px;
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
