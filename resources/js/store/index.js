import { createStore } from 'vuex';
import { SET_HOME } from "./mutation-types";
import api from '../api';

export default createStore({
  state() {
    return {
      profile: null,
      aboutMe: null,
      education: null,
      experience: null,
    };
  },

  mutations: {
    [SET_HOME](state, { profile, aboutMe, education, experience }) {
      state.profile = profile;
      state.aboutMe = aboutMe;
      state.education = education;
      state.experience = experience;
    },
  },

  actions: {
    fetchHome({ commit }) {
      return new Promise((resolve, reject) => {
        api.home.fetchData()
          .then((response) => {
            commit(SET_HOME, response.data);
          })
          .catch(reject);
      });
    },
  },
});
