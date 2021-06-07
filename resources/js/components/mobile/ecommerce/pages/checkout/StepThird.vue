<template>
    <div>
        <section class="padding-around">


            <div class="steps-wizard clearfix mb-3">
                <div class="step done" data-step-num="1">
                    <div class="step-icon"> 1 </div>
                    <span class="step-title">Shipping</span>
                </div>
                <div class="step done" data-step-num="2">
                    <div class="step-icon"> 2 </div>
                    <span class="step-title">Payment</span>
                </div>
                <div class="step current" data-step-num="3">
                    <div class="step-icon"> 3 </div>
                    <span class="step-title">Confirm</span>
                </div>
            </div>


            <article class="box mb-3 bg-light">
                <dl class="dlist-align text-muted">
                    <dt>Total price:</dt>
                    <dd class="text-right">$69.97</dd>
                </dl>
                <dl class="dlist-align text-muted">
                    <dt>Shipping:</dt>
                    <dd class="text-right">$10.00</dd>
                </dl>
                <dl class="dlist-align">
                    <dt><strong>Total:</strong></dt>
                    <dd class="text-right"><strong>$79.97</strong></dd>
                </dl>
            </article>

            <p class="alert alert-success"> <i class="fa fa-lock"></i> Some secureity information</p>
                
            <form role="form">
                <div class="form-group">
                <label for="username">Name on card</label>
                <input type="text" class="form-control" name="username" placeholder="Ex. John Smith" required="">
                </div> <!-- form-group.// -->
                
                <div class="form-group">
                <label for="cardNumber">Card number</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="cardNumber" placeholder="">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp; 
                            <i class="fab fa-cc-mastercard"></i> 
                        </span>
                    </div>
                </div> <!-- input-group.// -->
                </div> <!-- form-group.// -->
                
                <div class="row">
                    <div class="col flex-grow-0">
                        <div class="form-group">
                            <label><span class="hidden-xs">Expiration</span> </label>
                            <div class="form-inline" style="min-width: 220px">
                                <select class="form-control" style="width:100px">
                                <option>MM</option>
                                <option>01 - Janiary</option>
                                <option>02 - February</option>
                                <option>03 - February</option>
                                </select>
                                <span style="width:20px; text-align: center"> / </span>
                                <select class="form-control" style="width:100px">
                                <option>YY</option>
                                <option>2018</option>
                                <option>2019</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>CVV <i class="fa fa-question-circle"></i></label>
                            <input class="form-control" required="" type="text">
                        </div> <!-- form-group.// -->
                    </div>
                </div> <!-- row.// -->
                
                <router-link class="btn btn-primary btn-block" :to="{ name: 'customer.checkout.successful'}"><i class="fa fa-check"></i> Confirm </router-link>

                <!-- <button class="btn btn-primary btn-block" type="button"> <i class="fa fa-check"></i> Confirm  </button> -->

                </form>
                
            <br><br>

        </section> <!-- section-products  .// -->
    </div>
</template>