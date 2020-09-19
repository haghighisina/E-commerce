<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['delete-cart'])){
        $Cart->deleteCart($_POST['item_id']);
    }

    //Save the Item
    if (isset($_POST['wishList-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}
?>
<!--Shopping Cart Section-->
<section id="cart" class="py-3">
<div class="container-fluid w-75">
<h5 class="font-baloo font-size-20">Shopping Cart</h5>
<!--Shop Items-->
<div class="row">
    <div class="col-sm-9">
        <?php
        foreach($product->getData('cart') as $item):
            $cart = $product->getProduct($item['item_id']);
            $subTotal[] = array_map(function ($item){
        ?>
        <!--Cart Item-->
        <div class="row border-top py-3 mt-3">
            <div class="col-sm-2">
                <img src="<?= $item['item_image'] ?? "./assets/4.jpg";?>" style="height: 130px" alt="Cart1" class="img-fluid">
            </div>
            <div class="col-sm-8">
                <h5 class="font-baloo font-size-20"><?= $item['item_name'] ?? "Unknown" ;?></h5>
                <small>By <?= $item['item_brand'] ?? "Brand";?></small>
                <!--Rating-->

                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-siz-14">40, 234 rating</a>
                </div>
                <!-- !Rating-->
                <!--Product qty-->
                <div class="qty d-flex pt-2">
                    <div class="d-flex font-rale w-25">
                        <button class="qty-up border bg-light" data-id="<?= $item['item_id'] ?? '0' ;?>"><i class="fas fa-angle-up"></i></button>
                        <input type="text" data-id="<?= $item['item_id'] ?? '0' ;?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                        <button  data-id="<?= $item['item_id'] ?? '0' ;?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                    </div>
                    <form method="post">
                        <input type="hidden" value="<?= $item['item_id'] ?? 0; ?>" name="item_id">
                        <button type="submit" name="delete-cart" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                    </form>
                    <form method="post">
                        <input type="hidden" value="<?= $item['item_id'] ?? 0; ?>" name="item_id">
                        <button type="submit" name="wishList-submit" class="btn font-baloo text-danger">Save</button>
                    </form>
                </div>
                <!-- !Product qty-->
            </div>
            <div class="col-sm-2 text-right">
                <div class="font-size-20 font-baloo text-danger">
                    $ <span class="product_price" data-id="<?= $item['item_id'] ?? '0' ;?>"><?= $item['item_price'] ?? 0 ;?></span>
                </div>
            </div>
        </div>
        <!-- !Cart Item-->
        <?php
            return $item['item_price'];
            },$cart);
        endforeach;
        ?>
    </div>
    <!--Subtotal-->
    <div class="col-sm-3 pt-2">
        <div class="sub-total border border-secondary text-center mt-2">
            <h6 class="font-size-12 font-rale py-3 text-success"><i class="fas fa-check"></i>&nbsp; Your Free Order Delivery</h6>
            <div class="border-top py-4">
                <h5 class="font-baloo font-size-20">Subtotal (<?= isset($subTotal) ? count($subTotal) : 0 ;?>):&nbsp;
                    <span class="text-danger">
                        $<span class="text-danger" id="deal-price">
                            <?= isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?>
                        </span>
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