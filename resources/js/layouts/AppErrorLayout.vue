<template>
  <div class="app-error-layout">
    <app-header always-visible/>
    <div class="app-error-layout__content">
      <div class="app-error-layout__left">
        <div class="app-error-layout__http-code">
          <slot name="http-code"></slot>
        </div>
        <div class="app-error-layout__text">
          <slot name="text"></slot>
        </div>
        <div class="app-error-layout__try">
          <slot></slot>
        </div>
      </div>
      <div class="app-error-layout__right">
        <slot name="picture">
          <img
            class="app-error-layout__picture"
            src="../../assets/images/funny-cat.jpg"
            alt="funny-cat"
          >
        </slot>
      </div>
    </div>
    <app-footer/>
  </div>
</template>

<script>
import AppHeader from "../components/AppHeader";
import AppFooter from "../components/AppFooter";

export default {
  name: "AppErrorLayout",
  components: {
    AppHeader,
    AppFooter,
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/variables";
@import "../../styles/abstract/colors";

.app-error-layout__content {
  display: flex;
  width: $app-home-width;
  height: 65vh;
  justify-content: space-between;
  padding-top: 10%;
  padding-bottom: 50px;
  margin-left: auto;
  margin-right: auto;

  .app-error-layout__left {
    width: 50%;

    .app-error-layout__http-code {
      font-size: 40px;
      font-weight: 700;
      color: $app-green;
    }

    .app-error-layout__text {
      margin-top: 20px;
      font-size: 48px;
      font-weight: 600;
      line-height: 56px;
    }

    .app-error-layout__try {
      margin-top: 25px;
      font-size: 18px;
      font-weight: 300;
      line-height: 24px;
    }
  }

  .app-error-layout__right {
    overflow: hidden;

    .app-error-layout__picture {
      width: 460px;
    }
  }
}

@media (max-width: 1200px) {
  .app-error-layout__content {
    width: $app-home-width-lg;
  }
}

@media (max-width: 992px) {
  .app-error-layout__content {
    width: $app-home-width-md;
    padding-top: 100px;

    .app-error-layout__left {
      width: 100%;
    }

    .app-error-layout__right {
      display: none;
    }
  }
}

@media (max-width: 768px) {
  .app-error-layout__content {
    width: 100%;
    text-align: center;

    .app-error-layout__left {
      .app-error-layout__text {
        font-size: 32px;
      }
    }
  }
}
</style>
