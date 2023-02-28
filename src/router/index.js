import Vue from 'vue'
import VueRouter from 'vue-router'
import HomeView from '../views/HomeView.vue'
// import ProductsView from '../views/ProductsView.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  // {
  //   path: '/produtos',
  //   name: 'produtos',
  //   component: ProductsView
  // },

  {
    path: '/produtos',
    name: 'produtos',   
    component: () => import(/* webpackChunkName: "about" */ '../views/ProductsView.vue')
  },
  {
    path: '/contato',
    name: 'contato',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/ContatoWs.vue')
  },
  {
    path: '/sobre-nos',
    name: 'sobre-nós',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/SobreNos.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
