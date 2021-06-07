<template>
    <figure class="itemside item-cart">
        <div class="aside"><img src="mobile/images/items/item.jpg" class="rounded img-md"></div>
        <figcaption class="info align-self-center">
            <a href="#" class="title">{{ cart.product.name }}</a>
            <span class="price"> &#2547; {{cart.product.price}}</span> <small class="text-muted"> / per item</small>
            <div class="row m-0 p-0">
                <div class="col-xs-4">
                    <a href="#" v-on:click="deleteCart()" class="btn-xs btn btn-danger"> <i class="fa fa-trash"></i>   </a>
                </div>
                <div class="col-xs-8">
                    <div class="input-group input-spinner float-right">
                    <div class="input-group-prepend">
                    <button class="btn btn-primary" v-on:click="decrementQuantity()" type="button" :disabled="quantity == 1"> <i class="fa fa-minus"></i> </button>
                    </div>
                    <input type="number" class="form-control" v-model="quantity" disabled>
                    <div class="input-group-append">
                        <button class="btn btn-primary" v-on:click="incrementQuantity()" type="button"> <i class="fa fa-plus"></i> </button>
                    </div>
                </div>
                </div>
            </div>
        </figcaption>
    </figure>
</template>
<script>
export default {
    props : [
        'cartItem'
    ],
    data() {
        return {
            cart: this.cartItem,
            quantity: this.cartItem.quantity,
        }
    },
    created() {
    },
    methods: {
        decrementQuantity(){
            this.quantity -= 1;
        },
        incrementQuantity(){
            this.quantity += 1;
        },
        deleteCart(){
            if (confirm('Are you sure?')) {
                // destroy the vue listeners, etc
                this.$destroy();

                // remove the element from the DOM
                this.$el.parentNode.removeChild(this.$el);
            }
        },
    },
}
</script>
