<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <style>
        .parent{
            background: none;
            color: black;
            font:inherit;
            background-color: transparent;
            border: none;
            font-weight: 500;
            font-size:120%;
        }
        .child{
            background-color: transparent;
            background: none;
            font-weight: 200;
            border: none;
            padding-top:10px;
            padding-bottom:10px;
        }
        .child:hover
        {
            color:#CC9966;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home - The Cloth Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="logo-title.jpg">
    <link rel="icon" type="image/jpg" sizes="32x32" href="logo-title.jpg">
    <link rel="icon" type="image/jpg" sizes="16x16" href="logo-title.jpg">
    <link rel="manifest" href="logo-title.jpg">
    <link rel="mask-icon" href="logo-title.jpg" color="#666666">
    <link rel="shortcut icon" href="logo-title.jpg">
    <meta name="apple-mobile-web-app-title" content="TheClothStore">
    <meta name="application-name" content="TheClothStore">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#">Usd</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">Eur</a></li>
                                    <li><a href="#">Usd</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown">
                            <a href="#">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +92332-32119291</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="login.html"><i class="icon-user"></i>Login</a>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.html" class="logo">
                            <img src="logo.jpg" alt="Brand Logo" width="105" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="Home.php" class="sf-with-ul">Home</a>
                                </li>
                                <form action="Men-Category.php" method = "GET">
                                <li>
                                <a href=""><button class = "parent" name = "Men" value = "Men"
                                    type = "submit" class="sf-with-ul" >Men </button></a>

                                    <div class="megamenu megamenu-md">
                                        <div class="menu-title">Products</div>
                                        <!-- End .menu-title -->
                                        <ul>
                                        <li style="padding:5px;"><button class = "child" name = "Men" value = "Tees"
                                                type = "submit" class="sf-with-ul">Tees</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Men" value = "Jackets"
                                                type = "submit" class="sf-with-ul">Jackets</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Men" value = "Trousers"
                                                type = "submit" class="sf-with-ul">Trousers</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Men" value = "Sweatshirts"
                                                type = "submit" class="sf-with-ul">SweatShirts</button></li>
                                                <li style="padding:5px;"><button class = "child"  name = "Men" value = "Hoodies"
                                                type = "submit" class="sf-with-ul">Hoodies</button></li></form>
                                        </ul>
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <form action="Women-Category.php" method = "GET">
                                <li>
                                    
                                    <a href=""><button class = "parent" name = "Women" value = "Women"
                                    type = "submit" class="sf-with-ul" >Women </button></a>

                                    <div class="megamenu megamenu-sm">
                                        <div style="padding:5px;" class="menu-title">Products</div>

                                        <ul>
                                            <li style="padding:5px;"><button class = "child" name = "Women" value = "Unstitched"
                                                type = "submit" class="sf-with-ul">Unstiched</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Women" value = "Stitched"
                                                type = "submit" class="sf-with-ul">Stitched</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Women" value = "Jeans"
                                                type = "submit" class="sf-with-ul">Jeans</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Women" value = "Hoodies"
                                                type = "submit" class="sf-with-ul">Hoodies</button></li></form>
                                        </ul>
                                    </div><!-- End .megamenu megamenu-sm -->
                                    
                                </li>
                                <form action="Kids-Category.php" method = "GET">
                                <li>
                                <a href=""><button class = "parent" name = "Kids" value = "Kids"
                                    type = "submit" class="sf-with-ul" >Kids </button></a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="menu-title">Products</div>
                                        <ul>
                                            <li style="padding:5px;"><button class = "child" name = "Kids" value = "Tees"
                                                type = "submit" class="sf-with-ul">Tees</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Kids" value = "Eastern"
                                                type = "submit" class="sf-with-ul">Eastern</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Kids" value = "Trousers"
                                                type = "submit" class="sf-with-ul">Trousers</button></li>
                                            <li style="padding:5px;"><button class = "child"  name = "Kids" value = "Swaetshirts"
                                                type = "submit" class="sf-with-ul">Sweatshirts</button></li></form>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="blog.html" class="sf-with-ul">Accessories</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="menu-title">Products</div>
                                        <ul>
                                            <li style="padding:5px;"><a href="#">Hand Bags</a></li>
                                            <li style="padding:5px;"><a href="#">Key Chains</a></li>
                                            <li style="padding:5px;"><a href="#">Laptop Covers </a></li>
                                        </ul>
                                    </div>
                                </li>

                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i
                                    class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..."
                                        required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                     
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count"><?php 
                                
                                $len = count ($_SESSION['cart']);
                                if (!$len)
                                {
                                    $len = 0;
                                } 
                                echo $len;
                                ?></span>
                            </a>

                          
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <?php 
                                    $len = count ($_SESSION['cart']);
                                    for ($i=0; $i < $len  ; $i++) { 
                                    
                                    
                              echo ("<form action='Product.php' method = 'GET'>  
                              <div class='product'>
                                        <div class='product-cart-details'>
                                            <h4 class='product-title'>
                                                <button style = 'background-color:transparent;border:none;' type = 'submit' name = 'cartlink' >".$_SESSION['cart'][$i]['title']."  </a>
                                            </h4>

                                            <span class='cart-product-info'>
                                                <span class='cart-product-qty'>  ".$_SESSION['cart'][$i]['quantity']." </span>
                                                x   ".$_SESSION['cart'][$i]['price']."
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class='product-image-container'>
                                            <input type = 'hidden' name = 'linkfromcart' value = ".$_SESSION['cart'][$i]['id'].">
                                            <button style = 'border: none; background-color:transparent;' type = 'submit' name = 'cartlink'  class='product-image'>
                                                <img src='".$_SESSION['cart'][$i]['src']."' alt='product'>
                                            </button>
                                        </figure>
                                        <a href='#' class='btn-remove' title='Remove Product'><i
                                                class='icon-close'></i></a>
                                    </div><!-- End .product -->
                                    </form>
                                    
                                    ");} ?>

                                    

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">Rs. <?php
                                    if (isset($_SESSION['total']))
                                   {
                                    echo $_SESSION['total'];
                                   }
                                   else
                                   {
                                    echo $_SESSION['sum'];
                                   } ?></span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.php" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <div class="intro-section bg-lighter pt-5 pb-6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                                <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside"
                                    data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                    }'>

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)"
                                                    srcset="Men-Collection.jpg">
                                                <img src="Men-Collection.jpg" alt="Not Available">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h1 class="intro-title">Men's<br>Collection</h1>
                                            <!-- End .intro-title -->

                                            <a href="Men-Category.html" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)"
                                                    srcset="Women-Collection.jpg">
                                                <img src="Women-Collection.jpg" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h1 class="intro-title">Women's<br>Collection</h1>
                                            <!-- End .intro-title -->

                                            <a href="Women-Category.html" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                </div><!-- End .intro-slider owl-carousel owl-simple -->

                                <span class="slider-loader"></span><!-- End .slider-loader -->
                            </div><!-- End .intro-slider-container -->
                        </div><!-- End .col-lg-8 -->


                        <div class="col-lg-4">
                            <div class="intro-banners">
                                <div class="row row-sm">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display">
                                            <a href="Kids-Category.html">
                                                <img src="Kids-Main.jpg" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <span style="font-size:45px;"
                                                    class="intro-title">Kids's<br>Collection</span>
                                                <!-- End .intro-title -->
                                                <br>
                                                <a href="Kids-Category.html" class="btn btn-outline-white banner-link">Shop Now<i
                                                        class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->

                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display mb-0">
                                            <a href="#">
                                                <img src="Accesseries-Main.jpg" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <span style="font-size:45px;" class="intro-title">Accessories</span>
                                                <!-- End .intro-title -->
                                                <br>
                                                <a href="#" class="btn btn-outline-white banner-link">Shop Now<i
                                                        class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-lighter -->

            <div class="mb-6"></div><!-- End .mb-6 -->
            <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title-lg">Popular Products</h2><!-- End .title -->

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" id="trendy-all-link" data-toggle="tab" href="#trendy-all-tab">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trendy-fur-link" data-toggle="tab" href="#trendy-fur-tab">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trendy-decor-link" data-toggle="tab" href="#trendy-decor-tab">Kids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trendy-light-link" data-toggle="tab" href="#trendy-light-tab">Accessories</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <!--Men Tab------------------------------------------------------------------------------------------------------------>

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel"
                        aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                            data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>

                            <!-- Product 1 -->
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="Chill FULL SLEEVES T-SHIRTS-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="Chill FULL SLEEVES T-SHIRTS-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>


                                <div class="product-body">
                                    <h3 class="product-title"><a href="Product-Tees-Men-Chill FULL SLEEVES T-SHIRTS.html">Chill FULL SLEEVES T-SHIRTS</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        Rs.2,499
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="Good Miami Full Sleeves T-Shirts-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="Good Miami Full Sleeves T-Shirts-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="Product-Tees-Men-Good Miami Full Sleeves T-Shirts.html">Good Miami Full Sleeves T-Shirts</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        Rs.2,499
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="Graffiti UNISEX HOODIE-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="Graffiti UNISEX HOODIE-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="Product-Hoodies-Future UNISEX HOODIE.html">Graffiti UNISEX HOODIE</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        Rs.2,999
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="Future UNISEX HOODIE-2.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="Future UNISEX HOODIE-1.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="Product-Hoodies-Future UNISEX HOODIE.html">Future UNISEX HOODIE</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        Rs.1,999
                                    </div><!-- End .product-price -->

                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="Cookies Printed Graphic T-Shirt-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="Cookies Printed Graphic T-Shirt-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="Product-Tees-Men-Cookies Printed Graphic T-Shirt.html">Cookies Printed Graphic T-Shirt</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        PKR 899                                   
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="Phsyco Men Graphic T-Shirt-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="Phsyco Men Graphic T-Shirt-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="Product-Tees-Men-Phsyco Men Graphic T-Shirt.html">Phsyco Men Graphic T-Shirt</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        PKR 999
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->

                    <!--Women Tab------------------------------------------------------------------------------------------------------------>
                    <div class="tab-pane p-0 fade" id="trendy-fur-tab" role="tabpanel"
                        aria-labelledby="trendy-fur-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                            data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-new">NEW</span>
                                    <a href="product.html">
                                        <img src="ladies unstitched1front .jpg"
                                            alt="Product image" class="product-image">
                                        <img src="ladies unstitched1back.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">ladies unstitched</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $970,00
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="Product-Unstiched-Ladies-1piece.html" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">30% OFF</span>
                                    <a href="product.html">
                                        <img src="ladies jeans front.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="ladies jeans back.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="cart.html" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="Product-Jeans-Ladies.html">Product-Jeans-Ladies</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$337,00</span>
                                        <span class="old-price">Was $449,00</span>
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #878883;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->

                    <!--Kids Tab------------------------------------------------------------------------------------------------------------>
                    <div class="tab-pane p-0 fade" id="trendy-decor-tab" role="tabpanel"
                        aria-labelledby="trendy-decor-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                            data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="pkids1.webp"
                                            alt="Product image" class="product-image">
                                        <img src="pkids1b.webp"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="Navy Basic Kids Kurta.html"></a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $25.1
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="pkids3.webp"
                                            alt="Product image" class="product-image">
                                        <img src="pkids3b.webp"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="Black Basic Kids Kurta.html"></a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $47.5
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->

                    <!--Accessions Tab------------------------------------------------------------------------------------------------------------>
                    <div class="tab-pane p-0 fade" id="trendy-light-tab" role="tabpanel"
                        aria-labelledby="trendy-light-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                            data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-2-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-2-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Octo 4240</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $746,00
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #1f1e18;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="assets/images/demos/demo-2/products/product-5-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-2/products/product-5-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                                wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $675,00
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #74543e;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="container categories pt-6">
                <h2 class="title-lg text-center mb-4">Shop by Categories</h2><!-- End .title-lg text-center -->

                <div class="row">
                    <div class="col-6 col-lg-4">
                        <div class="banner banner-display banner-link-anim">
                            <a href="Men-Category.html">
                                <img src="Men-Category-Vertical.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 style="font-size: 30px;" class="banner-title text-white"><a href="Men-Category.html">Men</a></h3>
                                <!-- End .banner-title -->
                                <a href="Men-Category.html" class="btn btn-outline-white banner-link">Shop Now<i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                    <div class="col-6 col-lg-4 order-lg-last">
                        <div class="banner banner-display banner-link-anim">
                            <a href="Women-Category.html">
                                <img src="Women-Category-Vertical.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 style="font-size: 30px;" class="banner-title text-white"><a href="Women-Category.html">Women</a></h3>
                                <!-- End .banner-title -->
                                <a href="Women-Category.html" class="btn btn-outline-white banner-link">Shop Now<i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                    <div class="col-sm-12 col-lg-4 banners-sm">
                        <div class="row">
                            <div class="banner banner-display banner-link-anim col-lg-12 col-6">
                                <a href="#">
                                    <img src="Kids-Vertical.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-center">
                                    <h3 style="font-size: 30px;" class="banner-title text-white"><a href="Kids-Category.html">Kids</a></h3>
                                    <!-- End .banner-title -->
                                    <a href="Kids-Category.html" class="btn btn-outline-white banner-link">Shop Now<i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner banner-display banner-link-anim col-lg-12 col-6">
                                <a href="#">
                                    <img src="Accesseries.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-center">
                                    <h3 style="font-size: 30px;" class="banner-title text-white"><a href="#">Accessories</a></h3>
                                    <!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-white banner-link">Shop Now<i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div>
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-6 -->


        <main>
            <div class="cta cta-display bg-image pt-4 pb-4"
                style="background-image: url(assets/images/backgrounds/cta/bg-6.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-9 col-xl-8">
                            <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                                <div class="col">
                                    <h3 class="cta-title text-white">Use Promo "Summer22" To Get 10% OFF</h3><!-- End .cta-title -->
                                    <!-- End .cta-desc -->
                                </div><!-- End .col -->
                            </div><!-- End .row no-gutters -->
                        </div><!-- End .col-md-10 col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
        </main><!-- End .main -->

        <footer class="footer footer-dark">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="logo-removebg.png" class="footer-logo" alt="Footer Logo"
                                    width="105" height="25">
                        

                                <div class="social-icons">
                                    <a href="https://www.facebook.com/" class="social-icon" title="Facebook" target="_blank"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="https://twitter.com/" class="social-icon" title="Twitter" target="_blank"><i
                                            class="icon-twitter"></i></a>
                                    <a href="https://www.instagram.com/?hl=en" class="social-icon" title="Instagram" target="_blank"><i
                                            class="icon-instagram"></i></a>
                                    <a href="https://www.youtube.com/" class="social-icon" title="Youtube" target="_blank"><i
                                            class="icon-youtube"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Explore</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">About Store</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="login.html">Sign In</a></li>
                                    <li><a href="login.html">Log In</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2022 The Cloth Store. All Rights Reserved.</p>
                    <!-- End .footer-copyright -->
                    <figure class="footer-payments">
                        <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                    </figure><!-- End .footer-payments -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/index-2.html  22 Nov 2019 09:55:42 GMT -->

</html>