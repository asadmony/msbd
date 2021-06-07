<template>
    <div>
        <section class="padding-around">


            <div class="steps-wizard clearfix mb-3">
                <div class="step current" data-step-num="1">
                    <div class="step-icon"> 1 </div>
                    <span class="step-title">Shipping</span>
                </div>
                <div class="step" data-step-num="2">
                    <div class="step-icon"> 2 </div>
                    <span class="step-title">Payment</span>
                </div>
                <div class="step" data-step-num="3">
                    <div class="step-icon"> 3 </div>
                    <span class="step-title">Confirm</span>
                </div>
            </div>


            <form action="#">

            <p class="alert alert-success"> Some message is here!</p>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group form-row">
                <div class="col-4">
                <select name="" class="form-control">
                    <option value="1">+1 US</option>
                    <option value="1">+7 Ru</option>
                    <option value="1">+998 Uz</option>
                </select>
                </div>
            <div class="col-8">
                <input type="number" class="form-control" placeholder="Phone">
            </div>
            </div>

            <div class="form-group">
                <select class="custom-select form-control">
                <option selected>Region</option>
                    <option>Arizona</option>
                    <option>Washington</option>
                    <option>New York</option>
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Address">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Zip code">
            </div>


                <label class="custom-control my-4 custom-checkbox">
                <input type="checkbox" checked="" class="custom-control-input">
                <div class="custom-control-label">Save my address</div>
                </label>
                <router-link class="btn btn-block btn-primary" :to="{ name: 'customer.checkout.step.second'}">Save and continue </router-link>
            <!-- <button type="submit" class="btn btn-block btn-primary"> Save and continue </button> -->


            </form>

            <br><br>

        </section> <!-- section-products  .// -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
}
</script>