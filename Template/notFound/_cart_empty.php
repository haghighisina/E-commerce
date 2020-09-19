<!--Shopping Cart Section-->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        <!--Shop Items-->
        <div class="row">
            <div class="col-sm-9">
                <!--Empty Cart -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 py-2 text-center">
                        <img src="empty_cart.png" alt="Empty Cart" class="img-fluid" style="200px">
                        <p class="font-baloo text-black-50 font-size-16">Empty Cart</p>
                    </div>
                </div>
                <!--!Empty Cart -->
            </div>
            <!--Subtotal-->
            <div class="col-sm-3 pt-2">
                <div class="sub-total border border-secondary text-center mt-2">
                    <h6 class="font-size-12 font-rale py-3 text-success"><i class="fas fa-check"></i>&nbsp; Your Free Order Delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (<?= isset($subTotal) ? count($subTotal) : 0 ;?>):&nbsp;
                            <span class="text-danger">
                        $<span class="text-danger" id="deal-price"><?= isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span>
                    </span>
                        </h5>
                        <button type="submit" class="btn btn-warning mt-3">Buy</button>
                    </div>
                </div>
            </div>
            <!-- !Subtotal-->
        </div>
        <!-- !Items-->
    </div>
</section>
<!-- !Shopping Cart Section-->