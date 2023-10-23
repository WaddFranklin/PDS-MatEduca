import Vue from 'vue';
import { toRaw } from "vue";
import Vuex from 'vuex';
import axios from 'axios';

const apiService = () =>
axios.create({
  baseURL: 'http://127.0.0.1:8000/',
  headers: {
    accept: 'application/json',
    'content-type': 'application/json',
    'content-type': 'multipart/form-data',
  },
});


const store = new Vuex.Store({
  state: {
        // Defina o estado inicial do login aqui, por exemplo:
        isAuthenticated: false,
        user: null,
  },
  mutations: {
    // Defina as mutações para alterar o estado de login
    SET_AUTHENTICATED(state, isAuthenticated) {
        state.isAuthenticated = isAuthenticated;
    },
    SET_USER(state, user) {
        state.user = user;
    },
  },
  actions: {
    // Defina as ações para interagir com o servidor (por exemplo, fazer login)
    async loginUser({ commit }, userData) {
      try {
        const response = await apiService().post('/api', userData);

        if (response.status == 200) {
            commit('SET_AUTHENTICATED', true);
            commit('SET_USER', response.data);
        } else {
            commit('SET_AUTHENTICATED', false);
            commit('SET_USER', null);
        }
      } catch (error) {
            // Lidar com erros de login
            commit('SET_AUTHENTICATED', false);
            commit('SET_USER', null);
            console.error(error);
      }
    },
    async loginLogout({ commit }) {
      commit('SET_AUTHENTICATED', false);
      commit('SET_USER', null);
    },
    async createTutor({ commit }, tutorData) {
      try {
        const response = await apiService().post('/api/tutor', tutorData);
        if (response.status == 200) {
          return true
        } else {
          return false
        }
      } catch (error) {
            console.error(error);
      }
    },

    async scheduleTutoring({ commit }, scheduleData) {
      try {
        const response = await apiService().post('/api/tutoria', scheduleData);
        if (response.status == 200) {
          return true
        } else {
          return false
        }
      } catch (error) {
            console.error(error);
      }
    },

    async getSubjects({ commit }) {
      try {
        const response = await apiService().get('/api/assuntos');
        if (response.status == 200) {
          return response.data.data
        } else {
          return false
        }
      } catch (error) {
            console.error(error);
      }
    },


    async getTutoriasMarcadas({ commit }, id) {
      try {
        const response = await apiService().post('/api/getTutorias', id);
        if (response.status == 200) {
          return response.data
        } else {
          return false
        }
      } catch (error) {
            console.error(error);
      }
    },

    async getTutors({commit}) {
      try {
        const response = await apiService().get('/api/tutores');

        if (response.status == 200) {
          return response.data
        } else {
          return undefined
        }
      } catch (error) {
            console.error(error);
      }
    },

    async getTutorByID({commit}, id) {
      try {
        const response = await apiService().post('/api/tutorBYID', id);

        if (response.status == 200) {
          return response.data
        } else {
          return undefined
        }
      } catch (error) {
            console.error(error);
      }
    },


    async updateTutoria({ commit }, obj) {
      try {
        const response = await apiService().post(`/api/tutorias/${obj.id}`, obj);
    
        if (response.status === 200) {
          return response.data;
        } else {
          return undefined;
        }
      } catch (error) {
        console.error(error);
        return undefined;
      }
    },

    async getTutoriaStatus({commit}) {
      try {
        const response = await apiService().get('/api/getTutoriaStatus');

        if (response.status == 200) {
          return response.data
        } else {
          return undefined
        }
      } catch (error) {
            console.error(error);
      }
    },


    async getSpeciality() {
      try {
        const response = await apiService().get('/api/especialidades');

        if (response.status == 200) {
          return response.data
        } else {
          return undefined
        }
      } catch (error) {
            console.error(error);
      }
    },

    async getStatus() {
      try {
        const response = await apiService().get('/api/status');

        if (response.status == 200) {
          return response.data
        } else {
          return undefined
        }
      } catch (error) {
            console.error(error);
      }
    },

    async getSpecialityNames() {
      try {
        const response = await apiService().get('/api/especialidadesNomes');

        if (response.status == 200) {
          return response.data
        } else {
          return undefined
        }
      } catch (error) {
            console.error(error);
      }
    },

    async getImage(context, src) {
      try {
        const obj = {
          url: src
        }
        const response = await apiService().post('/api/imagem/', obj);
        
        if (response.status == 200) {
          return response.data
        } else {
          return undefined
        }
      } catch (error) {
            console.error(error);
      }
    },

    async getHorarios() {
      try {
        const response = await apiService().get('/api/horarios');
        
        if (response.status == 200) {
          return response.data
        } else {
          return undefined
        }
      } catch (error) {
            console.error(error);
      }
    }

  },
  getters: {
        // Defina getters para acessar o estado de login
        isAuthenticated: (state) => state.isAuthenticated,
        user: (state) => state.user,
  },
});

export default store;