<?php
//Header.php
include ('header.php');
?>
<?php


/*  include cart items if it is not empty */
count($product->getData('cart')) ? include ('Template/_Cart.php') :  include ('Template/notFound/_cart_empty.php');
/*  include cart items if it is not empty */

/*  include cart items if it is not empty */
count($product->getData('wishlist')) ? include ('Template/_wishlist.php') :  include ('Template/notFound/_wishlist_empty.php');
/*  include cart items if it is not empty */

/* New Phones*/
include ('Template/_New Phones.php');
/* New Phones*/
?>
<?php

//footer.php
include ('footer.php');
?>
