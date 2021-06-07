<template>
    <div>
        <div class="card">
            <div class="card-header">
                <div class="h3">
                    Orders  
                    <router-link class="btn btn-primary btn-sm h6 float-right" :to="{name: 'agent.ecommerce.order.create'}">
                        <i class="fa fa-plus"></i> new
                    </router-link>
                </div>
            </div>  
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>a</th>
                                <th>b</th>
                            </tr>
                        </thead>
                        <tbody>
                               <ecommerce-order-list-item></ecommerce-order-list-item> 
                               <ecommerce-order-list-item></ecommerce-order-list-item> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>