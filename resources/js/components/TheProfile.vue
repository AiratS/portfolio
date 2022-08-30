<template>
  <div class="the-profile">
    <div class="the-profile__content">
      <div class="the-profile__avatar">
        <img
          class="the-profile__avatar-img"
          :src="profile.imagePath"
          alt="avatar"
        />
      </div>
      <div class="the-profile__info">
        <div class="the-profile__i-am">
          Я
        </div>
        <div class="the-profile__full-name">
          {{ profile.fullName }}
        </div>
        <div class="the-profile__speciality">
          <the-text-type :text="profile.speciality"></the-text-type>
        </div>
        <div class="the-profile__cv">
          <a :href="profile.cvUrl">
            <app-button>
              {{ profile.cvLabel }}
            </app-button>
          </a>
        </div>
      </div>
    </div>
    <div class="the-profile__go-down">
      <app-bounce-down
        class="the-profile__bounce-down"
        :anchor="downAnchor"
      />
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";
import TheTextType from "./TheTextType";
import AppButton from "./AppButton";
import AppBounceDown from "./AppBounceDown";

export default {
  name: "TheProfile",
  components: {
    AppBounceDown,
    AppButton,
    TheTextType,
  },
  props: {
    downAnchor: {
      type: String,
      required: true,
    },
  },
  computed: {
    ...mapState(['profile']),
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";
@import "../../styles/abstract/variables";

.the-profile {
  position: relative;
  width: 100%;
  height: 100vh;
  background-color: $app-green;

  .the-profile__content {
    display: flex;
    width: $app-home-width;
    padding-top: 25vh;
    margin-left: auto;
    margin-right: auto;

    .the-profile__avatar-img {
      width: 427px;
      height: 427px;
      border-radius: 50%;
    }

    .the-profile__info {
      margin-top: 60px;
      margin-left: 65px;

      .the-profile__i-am {
        font-size: 28px;
        font-weight: 400;
        color: white;
      }

      .the-profile__full-name {
        margin-top: 15px;
        font-size: 72px;
        font-weight: 900;
        -webkit-text-stroke: 2px white;
        color: $app-green;
      }

      .the-profile__speciality {
        margin-top: 22px;
      }

      .the-profile__cv {
        margin-top: 48px;
      }
    }
  }

  .the-profile__go-down {
    position: absolute;
    width: 100%;
    bottom: 60px;
    left: 0;

    .the-profile__bounce-down {
      width: 20px;
      margin-left: auto;
      margin-right: auto;
    }
  }
}

@media (max-width: 1200px) {
  .the-profile {
    .the-profile__content {
      width: 960px;

      .the-profile__avatar-img {
        width: 352px;
        height: 352px;
      }

      .the-profile__info {
        margin-top: 25px;
      }
    }
  }
}

@media (max-width: 992px) {
  .the-profile {
    height: fit-content;

    .the-profile__content {
      width: fit-content;
      padding-top: 48px;
      padding-bottom: 48px;
      flex-direction: column;

      .the-profile__avatar-img {
        width: 624px;
        height: 624px;
      }

      .the-profile__info {
        margin-top: 45px;
        margin-left: 0;
        text-align: center;

        .the-profile__i-am {
          font-size: 26px;
        }

        .the-profile__full-name {
          margin-top: 20px;
          font-size: 63px;
        }

        .the-profile__cv {
          margin-top: 60px;
        }
      }
    }

    .the-profile__go-down {
      display: none;
    }
  }
}

@media (max-width: 768px) {
  .the-profile {
    .the-profile__content {
      .the-profile__avatar {
        padding-left: 15px;
        padding-right: 15px;

        .the-profile__avatar-img {
          width: 100%;
          height: auto;
        }
      }

      .the-profile__info {
        .the-profile__full-name {
          margin-top: 20px;
          font-size: 52px;
        }
      }
    }
  }
}
</style>
