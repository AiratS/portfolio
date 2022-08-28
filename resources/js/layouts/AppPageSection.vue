<template>
  <div class="app-page-section">
    <div class="app-page-section__background">
      <slot name="background"></slot>
    </div>
    <div class="app-page-section__main">
      <div class="app-page-section__title">
        <slot name="title"></slot>
      </div>
      <div class="app-page-section__content">
        <slot></slot>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AppPageSection",
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";
@import "../../styles/abstract/variables";

.app-page-section {
  position: relative;
  margin-top: 65px;

  .app-page-section__background {
    position: absolute;
    width: 100%;
    z-index: 1;
    text-align: center;
    font-size: 160px;
    font-weight: 900;
    text-transform: uppercase;
    color: white;
    -webkit-text-stroke: 1px $app-grey;
  }

  .app-page-section__main {
    position: relative;
    z-index: 2;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 70px;

    .app-page-section__title {
      margin-bottom: 70px;
      font-size: 40px;
      font-weight: 900;
      text-transform: uppercase;
      text-align: center;
      color: $app-green;
    }

    .app-page-section__content {
      width: $app-home-width;
      margin-left: auto;
      margin-right: auto;
    }
  }
}

@media (max-width: 1200px) {
  .app-page-section {
    .app-page-section__main {
      .app-page-section__content {
        width: $app-home-width-lg;
      }
    }
  }
}

@media (max-width: 992px) {
  .app-page-section {
    .app-page-section__main {
      .app-page-section__content {
        width: $app-home-width-md;
      }
    }
  }
}

@media (max-width: 768px) {
  .app-page-section {
    .app-page-section__background {
      font-size: 96px;
    }

    .app-page-section__main {
      padding-top: 37px;

      .app-page-section__title {
        margin-bottom: 40px;
        font-size: 31px;
      }

      .app-page-section__content {
        width: $app-home-width-sm;
      }
    }
  }
}

@media (max-width: 576px) {
  .app-page-section {
    .app-page-section__background {
      font-size: 86px;
    }

    .app-page-section__main {
      padding-top: 32px;

      .app-page-section__content {
        width: 100%;
      }
    }
  }
}
</style>
