<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['delete-cart'])){
        $deleteRecord = $Cart->deleteCart($_POST['item_id']);
    }

    if (isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>
<!--Shopping Cart Section-->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>
        <!--Shop Items-->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach($product->getData('wishlist') as $item):
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
                                    <form method="post">
                                        <input type="hidden" value="<?= $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?= $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add To Cart</button>
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
        </div>
        <!-- !Items-->
    </div>
</section>
<!-- !Shopping Cart Section-->