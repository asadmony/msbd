/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./../bootstrap');

window.Vue = require('vue').default;

import router from './router'


//importing filters
import Slug from './../filters/slug';
import Date from './../filters/date';

Vue.filter('slug', Slug)
Vue.filter('date', Date)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// agent components
Vue.component('agent-app', require('./components/mobile/pages/Index.vue').default);
Vue.component('agent-ecommerce-app', require('./components/mobile/ecommerce/Index.vue').default);
Vue.component('agent-sidebar-left', require('./components/mobile/includes/SidebarLeft.vue').default);
Vue.component('agent-ecommerce-sidebar-left', require('./components/mobile/ecommerce/includes/SidebarLeft.vue').default);
Vue.component('agent-header-top', require('./components/mobile/includes/HeaderTop.vue').default);
Vue.component('agent-ecommerce-header-top', require('./components/mobile/ecommerce/includes/HeaderTop.vue').default);
Vue.component('bottom-back-bottom', require('./../components/mobile/ecommerce/includes/BottomBackButton.vue').default);

Vue.component('ecommerce-product-list-item', require('./components/mobile/ecommerce/pages/product/ProductListItem.vue').default);
Vue.component('ecommerce-order-list-item', require('./components/mobile/ecommerce/pages/order/OrderListItem.vue').default);



// ecommerce components 
// Vue.component('main-app', require('./components/MainApp.vue').default);
// Vue.component('ecommerce-main-app', require('./components/mobile/ecommerce/Index.vue').default);
// Vue.component('ecommerce-cart-item', require('./components/mobile/ecommerce/pages/cart/CartItem.vue').default);
// Vue.component('sidebar-left', require('./components/mobile/ecommerce/includes/SidebarLeft.vue').default);
// Vue.component('header-top', require('./components/mobile/ecommerce/includes/HeaderTop.vue').default);
// Vue.component('slider-section', require('./components/mobile/ecommerce/includes/SliderSection.vue').default);
// Vue.component('service-project', require('./components/mobile/ecommerce/includes/ServiceProject.vue').default);
// Vue.component('product-item', require('./components/mobile/ecommerce/includes/ProductItem.vue').default);
// Vue.component('recently-viewed-products', require('./components/mobile/ecommerce/includes/RecentlyViewedProducts.vue').default);
// Vue.component('best-sales', require('./components/mobile/ecommerce/includes/BestSales.vue').default);
// Vue.component('brand-section', require('./components/mobile/ecommerce/includes/BrandSection.vue').default);
// Vue.component('nav-bottom', require('./components/mobile/ecommerce/includes/NavBottom.vue').default);
// Vue.component('shop-product-item', require('./components/mobile/ecommerce/pages/shop/ShopProductItem.vue').default);
// Vue.component('ecommerce-customer-orders', require('./components/mobile/ecommerce/pages/profile/CustomerOrders.vue').default);
// Vue.component('ecommerce-seller-shop', require('./components/mobile/ecommerce/pages/profile/SellerShop.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
