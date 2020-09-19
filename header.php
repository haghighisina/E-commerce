<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <!--Bootstrap-->
    <link rel="icon" href="./assets/birdhouse_tweet_twitter_icon_127117.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--Owl-carousal-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Custom Css-->
    <link rel="stylesheet" href="style.css">

    <?php
    //function Connection
    require("functions.php")
    ?>
</head>
<body>
<!--Start Header-->
<header id="header">
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="index.php"><i style="font-size:40px" class="fa fa-home"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Products.php">Products<i class="fas fa-chevron-circle-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category<i class="fas fa-chevron-circle-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Incoming</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-2 pl-5 font-rubik">
                <li class="nav-item border-right border-dark">
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-user-circle-o" style="font-size:24px"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">
                        <i class="fa fa-bars" style="font-size:24px"></i>
                    </a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-12 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?= count($product->getData('cart'));?></span>
                </a>
            </form>
        </div>
    </nav>
    <!--Navigation-->
</header>
<!-- !Header-->

<!--Start Main-->
<main id="main-site">