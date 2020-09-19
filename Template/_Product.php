<?php

//Request Method
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['product_submit'])) {

        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}

$item_id = $_GET['item_id'] ?? 1;
foreach($product->getData() as $item):
    if ($item['item_id'] == $item_id):

?>
<!--Product-->
<div id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?= $item['item_image'] ?? "./assets/1.jpg";?>" alt="product" class="img-fluid">
                <form method="post">
                <div class="form-row font-size-16 pt-4 font-baloo">
                    <div class="col">
                        <?php
                        if (in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add</button>';
                        }
                        ?>
                    </div>
                    <div class="col">
                        <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? '1';?>">
                        <input type="hidden" name="user_id" value="<?= 1;?>">
                        <button type="submit" name="product_submit" class="btn btn-warning form-control">Add</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?= $item['item_name'] ?? "Unknown";?></h5>
                <small>By <?= $item['item_brand'] ?? "Brand";?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="font-rale px-2 font-size-12">30.234 | +1000 People rating</a>
                    <i class="fa fa-eye text-warning rounded-pill" aria-hidden="true">&nbsp; +1000</i>
                </div>
                <hr class="m-0">
                <!--Product Price-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P</td>
                        <td><strike>$180.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Price</td>
                        <td class="font-size-14 text-danger">$<span><?= $item['item_price'] ?? 0;?></span><span class="text-dark font-size-12">&nbsp;&nbsp;The Taxes</span></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger"> $100.00</span></td>
                    </tr>
                </table>
                <!-- !Product Price-->
                <!--Policy-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">One week<br>Replace</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">ASAP <br>Delivery</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 <br>Year Guarantee</a>
                        </div>
                    </div>
                </div>
                <!--!Policy-->
                <hr>
                <!--Details-->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Our Delivery Service: Jun 1 - Apr 20</small>
                    <small>Buy From<a href="#">&nbsp;Company</a></small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver To ?</small>
                </div>
                <!--!Details-->
                <!--Color Details-->
                <div class="row">
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h5 class="font-baloo">Color</h5>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                    </div>
                    <!--Quantity-->
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- !Quantity-->
                </div>
                <!-- !Color Details-->
                <!--Size-->
                <div class="size my-3">
                    <h6 class="font-baloo">Size:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !Size-->
            </div>
        </div>
        <div class="col-12">
            <h6 class="font-rubik">Description</h6>
            <hr>
            <p><?= $item['item_description'] ?? "About..";?></p>
         </div>
    </div>
</div>
<!-- !Product-->
<?php
    endif;
    endforeach;
?>