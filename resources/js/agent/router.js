//Agent router
import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
import AgentHome from './components/mobile/pages/dashboard/Home'
import EcommerceHome from './components/mobile/ecommerce/pages/Home'
import EcommerceCreateProduct from './components/mobile/ecommerce/pages/product/CreateProduct'
import EcommerceProductList from './components/mobile/ecommerce/pages/product/ProductList'
import EcommerceCreateOrder from './components/mobile/ecommerce/pages/order/CreateOrder'
import EcommerceOrderList from './components/mobile/ecommerce/pages/order/OrderList'
import EcommerceSettings from './components/mobile/ecommerce/pages/settings/EcommerceSettings'

const routes = [
    //agent routes
    {
        name: 'agent.home',
        path: '/agent',
        component: AgentHome,
    },
    {
        name: 'agent.ecommerce.home',
        path: '/agent/ecommerce',
        component: EcommerceHome,
    },
    {
        name: 'agent.ecommerce.product.create',
        path: '/agent/ecommerce/product/create',
        component: EcommerceCreateProduct,
    },
    {
        name: 'agent.ecommerce.product.list',
        path: '/agent/ecommerce/product/all',
        component: EcommerceProductList,
    },
    {
        name: 'agent.ecommerce.order.create',
        path: '/agent/ecommerce/order/create',
        component: EcommerceCreateOrder,
    },
    {
        name: 'agent.ecommerce.order.list',
        path: '/agent/ecommerce/order/all',
        component: EcommerceOrderList,
    },
    {
        name: 'agent.ecommerce.settings',
        path: '/agent/ecommerce/settings',
        component: EcommerceSettings,
    },

]

export default new Router({
    mode: 'history',
    routes
})