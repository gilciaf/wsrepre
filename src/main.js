import Vue from 'vue'
import App from './App.vue'
import router from './router'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import vuetify from './plugins/vuetify'

Vue.config.productionTip = false
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)


new Vue({
  router,
  vuetify,
  render: h => h(App)
}).$mount('#app')
