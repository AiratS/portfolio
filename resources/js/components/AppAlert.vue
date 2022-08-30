<template>
  <div
    class="app-alert"
    :class="modifiers"
  >
    <div class="app-alert__text">
      {{ instanceMessage }}
    </div>
    <div
      class="app-alert__cross"
      @click="hide"
    >
      x
    </div>
  </div>
</template>

<script>
const TYPE_SUCCESS = 'success';
const TYPE_DANGER = 'danger';

const DEFAULT_TIMEOUT = 2000;

export default {
  name: "AppAlert",
  props: {
    type: {
      type: String,
      required: false,
      default: TYPE_SUCCESS,
    },
    message: {
      type: String,
      required: false,
    },
    timeout: {
      type: Number,
      required: false,
      default: DEFAULT_TIMEOUT,
    },
  },
  data() {
    return {
      visible: false,
      instanceMessage: this.message,
      instanceType: this.type,
    };
  },
  computed: {
    modifiers() {
      const classes = [];

      classes.push(TYPE_DANGER === this.instanceType
        ? 'app-alert_type_danger'
        : 'app-alert_type_success');

      if (this.visible) {
        classes.push('app-alert_visible');
      }

      return classes;
    },
  },
  methods: {
    show(message = this.message, type = this.type) {
      this.instanceMessage = message;
      this.instanceType = type;
      this.visible = true;
    },
    hide() {
      this.visible = false;
      this.instanceMessage = this.message;
      this.instanceType = this.type;
    },
  },
  watch: {
    visible(visible) {
      if (visible) {
        setTimeout(() => {
          this.hide();
        }, this.timeout);
      }
    },
  },
}
</script>

<style lang="scss" scoped>
@import "../../styles/abstract/colors";

.app-alert {
  display: none;
  position: relative;
  width: 100%;
  padding-top: 12px;
  padding-bottom: 12px;
  border-radius: 4px;
  text-align: center;
  opacity: 0;
  transition: opacity 1s ease-in;

  .app-alert__text {
    font-size: 16px;
    font-weight: 400;
  }

  .app-alert__cross {
    position: absolute;
    top: 8px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
  }
}

.app-alert_type_success {
  border: 1px solid $app-alert-success-border;
  background-color: $app-alert-success-bg;

  .app-alert__text {
    color: $app-alert-success-color;
  }
}

.app-alert_type_danger {
  border: 1px solid $app-alert-danger-border;
  background-color: $app-alert-danger-bg;

  .app-alert__text {
    color: $app-alert-danger-color;
  }
}

.app-alert_visible {
  display: block;
  opacity: 1;
}
</style>
