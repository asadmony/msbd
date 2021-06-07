<template>
    <div>
        <form action="" class="padding-around">
            <div class="row">
                <div class="col-6"> 
                    <select class="custom-select form-control">
                        <option>Category</option>
                        <option>Clothes</option>
                        <option>Electronics</option>
                    </select>
                </div> <!-- col.// -->
                <div class="col-6">
                    <select class="custom-select form-control">
                        <option>Price cheap</option>
                        <option>Price high</option>
                        <option>Oldest</option>
                    </select>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </form>

        <section class="padding-x">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4" v-for="(product, index) in products" :key="index">
                    <shop-product-item :productItem="product"></shop-product-item>
                </div>
            </div> <!-- row end -->
        </section> <!-- section body .// -->
        <bottom-back-bottom></bottom-back-bottom>
    </div>
</template>
<script>
export default {
    data() {
        return {
            products: [],
        }
    },
    created() {
        this.getProducts()
    },
    methods: {
        getProducts(){
            this.products = [
                {
                    id: 1,
                    name: 'Product 1',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 2,
                    name: 'Product 2',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 3,
                    name: 'Product 3',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 4,
                    name: 'Product 4',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 5,
                    name: 'Product 5',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 6,
                    name: 'Product 6',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 7,
                    name: 'Product 7',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 8,
                    name: 'Product 8',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 9,
                    name: 'Product 9',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
                {
                    id: 10,
                    name: 'Product 10',
                    price: 1221,
                    image: 'mobile/images/items/item.jpg',
                },
            ];
        },
    },
}
</script>