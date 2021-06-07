<template>
    <div>
        <section class="section-products padding-around">
            <div v-for="(cartItem, index) in carts" :key="index">
            <ecommerce-cart-item :cartItem="cartItem"></ecommerce-cart-item>
            </div>

        </section> <!-- section-products  .// -->

        <hr class="divider">

        <section class="padding-around">
            <dl class="dlist-align text-muted">
                <dt>Total price:</dt>
                <dd class="text-right">$69.97</dd>
            </dl>
            <dl class="dlist-align text-muted">
                <dt>Shipping:</dt>
                <dd class="text-right">$10.00</dd>
            </dl>
            <dl class="dlist-align">
                <dt><strong><i class="icon fa text-muted fa-money-bill"></i> Total:</strong></dt>
                <dd class="text-right"><strong>$59.97</strong></dd>
            </dl>

            <p class="d-block  icontext"> <i class="icon fa text-muted fa-truck"></i> <span><b>Delivery: </b> 4-5 days</span></p>

            <router-link class="btn btn-primary btn-block" :to="{ name: 'customer.checkout.step.first'}"> <span class="text"> Order now </span> <i class="fa fa-chevron-right"></i> </router-link>

            <!-- <a href="" class="btn btn-primary btn-block"> <span class="text"> Order now </span> <i class="fa fa-chevron-right"></i></a> -->

        </section>
        <bottom-back-bottom></bottom-back-bottom>
    </div>
</template>

<script>
export default {
    data() {
        return {
            carts: [],
        }
    },
    created() {
        this.getCarts()
    },
    methods: {
        getCarts(){
            this.carts = [
                {
                    id: 1,
                    quantity: 2,
                    product: {
                        name: 'Product name 1',
                        price: 200,
                    },
                },
                {
                    id: 2,
                    quantity: 1,
                    product: {
                        name: 'Product name 2',
                        price: 400,
                    },
                },
                {
                    id: 3,
                    quantity: 1,
                    product: {
                        name: 'Product name 3',
                        price: 600,
                    },
                },
            ];
        },
    },
}
</script>