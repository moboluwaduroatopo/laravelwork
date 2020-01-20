import Vue from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios'
// import 'bootstrap-css-only/css/bootstrap.min.css'; 
// import 'mdbvue/build/css/mdb.css';

import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import "vue-material/dist/theme/black-green-light.css";



Vue.use(VueMaterial)
Vue.use(axios)

Vue.config.productionTip = false

new Vue({
	router,
  render: h => h(App)
}).$mount('#app')
