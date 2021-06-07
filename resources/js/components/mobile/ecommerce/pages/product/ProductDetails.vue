<template>
    <div>
        <header class="app-header absolute-top back-button">
            <a href="" onclick="event.preventDefault();history.back()" class="btn btn-icon shadow rounded-circle m-0 pt-2 pl-2">
                <i class="fa fa-arrow-left fa-2x text-dark"></i>
            </a>
        </header>
        <section class="gallery-wrap">
            <a href="images/items/item-detail.jpg" data-fancybox="gallery" class="img-big-wrap"><img src="images/items/item-detail.jpg"></a>
            <div class="thumbs-wrap scroll-horizontal">
                <a href="images/items/item-detail.jpg" data-fancybox="gallery" class="item-thumb"> <img src="images/items/item.jpg"></a>
                <a href="images/items/item-detail.jpg" data-fancybox="gallery" class="item-thumb"> <img src="images/items/item.jpg"></a>
                <a href="images/items/item-detail.jpg" data-fancybox="gallery" class="item-thumb"> <img src="images/items/item.jpg"></a>
                <a href="images/items/item-detail.jpg" data-fancybox="gallery" class="item-thumb"> <img src="images/items/item.jpg"></a>
            </div>
        </section>

        <section class="padding-around">
            <h5 class="title-detail">Product name goes here | {{ product.name }}  </h5>	
            <div class="price-wrap mb-2">
                <span class="h6 price text-success">&#2547; {{product.price}}</span> 
            </div> <!-- price-wrap.// -->

            <div class="rating-wrap mb-2">
                <ul class="rating-stars">
                    <li style="width:80%" class="stars-active">
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </li>
                    <li>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </li>
                </ul>
                <small class="label-rating text-muted">7/10</small>
            </div> <!-- rating-wrap.// -->
            
            <div class="d-flex">
                <div class="flex-grow-1 mr-2"><a href="#" class="btn btn-primary btn-block">Add to cart</a></div>
                <div><a href="#" class="btn btn-light btn-icon"><i class="fa fa-heart"></i></a></div>
            </div>
            <article class="info-detail-wrap">
                <p>
                    Great words is nothing but just sounds tovar xarakteristikasi uchun tekst shunchaki Lorem ipsum dolor sit amet 
                    <a href="#" class="btn-link"> Read more</a>
                </p>
                <h6 class="title-sm">Product features</h6>
                <ul class="list-bullet">
                    <li>Multiple flight modes</li>
                    <li>Super fast and amazing</li>
                    <li>Best battery performance</li>
                    <li>5 years warranty</li>
                </ul>
            </article>
            <figure class="icontext w-100">
                <div class="icon"><img src="images/avatars/1.jpg" class="img-sm rounded" alt=""></div>
                <figcaption class="text"><p>Great shop owner</p> <span class="text-muted">234 items</span> </figcaption>
                <span> <i class="fa fa-chevron-right text-muted"></i> </span>
            </figure>
        </section>
        <hr class="divider  mb-3">

        <h5 class="title-section">Similar items</h5>

        <section class="scroll-horizontal padding-x">
                <div class="item">
                    <a href="#" class="product-sm">
                        <div class="img-wrap"> <img src="images/items/item.jpg"> </div>
                        <div class="text-wrap">
                            <p class="title text-truncate">Great item name</p>
                            <div class="price">$27.00</div> <!-- price-wrap.// -->
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-sm">
                        <div class="img-wrap"> <img src="images/items/item.jpg"> </div>
                        <div class="text-wrap">
                            <p class="title text-truncate">Headset for music</p>
                            <div class="price">$27.00</div> <!-- price-wrap.// -->
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-sm">
                        <div class="img-wrap"> <img src="images/items/item.jpg"> </div>
                        <div class="text-wrap">
                            <p class="title text-truncate">TP link modem</p>
                            <div class="price">$43.00</div> <!-- price-wrap.// -->
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-sm">
                        <div class="img-wrap"> <img src="images/items/item.jpg"> </div>
                        <div class="text-wrap">
                            <p class="title text-truncate">Great product name</p>
                            <div class="price">$98.50</div> <!-- price-wrap.// -->
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-sm">
                        <div class="img-wrap"> <img src="images/items/item.jpg"> </div>
                        <div class="text-wrap">
                            <p class="title text-truncate">Headset for music</p>
                            <div class="price">$27.00</div> <!-- price-wrap.// -->
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-sm">
                        <div class="img-wrap"> <img src="images/items/item.jpg"> </div>
                        <div class="text-wrap">
                            <p class="title text-truncate">TP link modem</p>
                            <div class="price">$43.00</div> <!-- price-wrap.// -->
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-sm">
                        <div class="img-wrap"> <img src="images/items/item.jpg"> </div>
                        <div class="text-wrap">
                            <p class="title text-truncate">Great product name</p>
                            <div class="price">$98.50</div> <!-- price-wrap.// -->
                        </div>
                    </a>
                </div>
        </section>
        <bottom-back-bottom></bottom-back-bottom>
    </div>
</template>
<style scoped>
.back-button{
    top: 65px;
}
</style>
<script>
export default {
    props: [
        'productId',
    ],
    data() {
        return {
            product: null,
        }
    },
    created() {
        this.getProductDetails(this.productId)
    },
    methods: {
        getProductDetails(productId){
            this.product = {
                id: productId,
                name: 'product name'+productId,
                price: 1253131,
                image: 'someimage.jpg'
            }
        }
    },
}
</script>