import Vue from 'vue'
import App from './App.vue'
import router from './router'
// import 'bootstrap-css-only/css/bootstrap.min.css'; 
// import 'mdbvue/build/css/mdb.css';
import VueResource from 'vue-resource'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import "vue-material/dist/theme/black-green-light.css";


Vue.use(VueResource)
Vue.use(VueMaterial)

Vue.config.productionTip = false

new Vue({
	router,
  render: h => h(App)
}).$mount('#app')
