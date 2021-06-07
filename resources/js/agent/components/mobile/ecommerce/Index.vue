<template>
    <div>
        <agent-ecommerce-sidebar-left></agent-ecommerce-sidebar-left>

        <!-- =============== screen-wrap =============== -->
        <div class="screen-wrap">

        <agent-ecommerce-header-top></agent-ecommerce-header-top>

        <main class="app-content">
            <router-view></router-view>
        </main>

        <!-- <nav-bottom :activeMenu="navBottomMenuActive"></nav-bottom> -->

        </div> 
        <!-- =============== screen-wrap end.// =============== -->

    </div>
</template>

<script>
export default {
    data() {
        return {
            navBottomMenuActive: 'home',
        }
    },
    created() {
    },
    methods: {
        navBottomMenuButtonActive(menu){
            this.navBottomMenuActive = menu
        }
    },
}
</script>