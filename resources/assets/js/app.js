import Vue from 'vue';
import axios from 'axios';
import App from './components/App.vue';

Vue.prototype.$axios = axios;

export default new Vue({
  render: h => h(App),
});
