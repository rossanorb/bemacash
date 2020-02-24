import Vue from 'vue'
import Vuex from 'vuex'
import dashboard from './modules/dashboard'
import orders from './modules/orders'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    dashboard,
    orders
  }  
})
