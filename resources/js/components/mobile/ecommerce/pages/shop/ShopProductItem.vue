<template>
    <div>
        <router-link  class="product-sm mb-3" :to="{name:'ecommerce.product', params: { productId: product.id, productSlug: productSlug }}">
            <div class="img-wrap"> <img :src="product.image"> </div>
            <div class="text-wrap">
                <p class="title text-truncate">{{ product.name }}</p>
                <div class="price">&#2547; {{product.price}}</div> <!-- price-wrap.// -->
            </div>
        </router-link>
    </div>
</template>
<script>
export default {
    props: [
        'productItem',
    ],
    data() {
        return {
            product: this.productItem,
            productSlug: null,
        }
    },
    created() { 
        this.productSlug = this.$options.filters.slug(this.product.name)
    },
    methods: {
    },
}
</script>