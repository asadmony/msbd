<template>
    <div>
        <agent-sidebar-left>
            <a href="/agent"><i class="fa fa-home"></i> Home</a>
            <a href="/agent/ecommerce"><i class="fa fa-shopping-cart"></i> Ecommerce</a>
        </agent-sidebar-left>

        <!-- =============== screen-wrap =============== -->
        <div class="screen-wrap">

        <agent-header-top>
            <h5 class="title-header ml-2">Agent Dashboard</h5>
            <div class="header-right">  
                <a href="#" class="btn-header"> <i class="fa fa-bell"></i> </a> 
            </div>
        </agent-header-top>

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
}
</script>