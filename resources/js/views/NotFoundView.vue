<template>
  <div class="not-found-view">
    <app-header always-visible/>

    <div class="not-found-view__content">
      <div class="not-found-view__left">
        <div class="not-found-view__http-code">
          404
        </div>
        <div class="not-found-view__text">
          Уупс! Это не то, что вы искали
        </div>
        <div class="not-found-view__try-home">
          Испытайте свою удачу, вернувшись на
          <router-link class="not-found-view__home-link" :to="{ name: 'home' }">главную страницу</router-link>.
        </div>
      </div>
      <div class="not-found-view__right">
        <img
          class="not-found-view__picture"
          src="../../assets/images/funny-cat.jpg"
          alt="funny-cat"
        >
      </div>
    </div>

    <app-footer/>
  </div>
</template>

<script>
import AppHeader from "../components/AppHeader";
import AppFooter from "../components/AppFooter";

export default {
  name: "NotFoundView",
  components: {
    AppHeader,
    AppFooter,
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/variables";
@import "../../styles/abstract/colors";

.not-found-view__content {
  display: flex;
  width: $app-home-width;
  height: 65vh;
  justify-content: space-between;
  padding-top: 10%;
  padding-bottom: 50px;
  margin-left: auto;
  margin-right: auto;

  .not-found-view__left {
    width: 50%;

    .not-found-view__http-code {
      font-size: 40px;
      font-weight: 700;
      color: $app-green;
    }

    .not-found-view__text {
      margin-top: 20px;
      font-size: 48px;
      font-weight: 600;
      line-height: 56px;
    }

    .not-found-view__try-home {
      margin-top: 25px;
      font-size: 18px;
      font-weight: 300;
      line-height: 24px;

      .not-found-view__home-link {
        text-decoration: none;
      }
    }
  }

  .not-found-view__right {
    overflow: hidden;

    .not-found-view__picture {
      width: 460px;
    }
  }
}

@media (max-width: 1200px) {
  .not-found-view__content {
    width: $app-home-width-lg;
  }
}

@media (max-width: 992px) {
  .not-found-view__content {
    width: $app-home-width-md;
    padding-top: 100px;

    .not-found-view__left {
      width: 100%;
    }

    .not-found-view__right {
      display: none;
    }
  }
}

@media (max-width: 768px) {
  .not-found-view__content {
    width: 100%;
    text-align: center;

    .not-found-view__left {
      .not-found-view__text {
        font-size: 32px;
      }

      .not-found-view__home-link {
        display: block;
      }
    }
  }
}
</style>
