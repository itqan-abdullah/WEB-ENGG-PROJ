<?php 
session_start();
$dblink = mysqli_connect("localhost:3307","root","","store"); 
$pass = rand(1000,99999);

$QUERY1 = "insert into customer(c_name, c_password,address,phone,postal_code) values
('".$_GET['fname']." ".$_GET['lname']."',".$pass.", '".$_GET['HouseNumber']." ".$_GET['Apartment']."
".$_GET['city']." ".$_GET['state']."', ".$_GET['phone'].",".$_GET['postalcode']."   );";
echo $QUERY1;
$cust_add = mysqli_query($dblink,$QUERY1);

 

$cid = "select max(customer_id) as cid from customer;";
$result = mysqli_query($dblink,$cid);
$result = mysqli_fetch_assoc($result);
$result = $result['cid'];
echo ($result);

$oid = "select max(order_id) as oid from c_order;";
$result2 = mysqli_query($dblink,$oid);
$result2 = mysqli_fetch_assoc($result2);
$result2 = $result2['oid'] + 1;
if ( is_null($result2))
{
    $result2 = 1;
}
echo ("<br>kbjbkb ");
print_r ($result2);

for ($i=0; $i < count ($_SESSION['cart']) ; $i++) { 
    $QUERY2 = "insert into c_order(order_id,item_id,quantity,customer_id,size)
    value (".$result2.",".$_SESSION['cart'][$i]['id'].",".$_SESSION['cart'][$i]['quantity']." , ".$result.", 'M');";
    echo ('<br>');
    echo $QUERY2;
    $order_add = mysqli_query($dblink,$QUERY2);
}


?>



<!DOCTYPE html>
<html lang="en">
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


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Successful Purchase - The Cloth Store</title>
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
                        <ul  class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="Home.php" class="sf-with-ul">Home</a>
                                </li>
                                <form style = "padding-top:14px" action="Men-Category.php" method = "GET">
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
                                <form style = "padding-top:14px" action="Women-Category.php" method = "GET">
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
                                <form style = "padding-top:14px" action="Kids-Category.php" method = "GET">
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
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-primary">View Cart</a>
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
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('Success.jpg')">
        			<h1 class="page-title" style="color:black;margin-left: 280px;">Order Has Placed<span style="color:black;">Thank You For Shopping </span></h1>
                    <div style="margin-left:80px;"><a href="Home.html"><span  style="color:black;">Continue Shopping &nbsp; -></span></a></div>
	        	</div><!-- End .page-header -->
               
            </div><!-- End .container -->
        </main><!-- End .main -->
<br>
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
                                    <li><a href="#">FAQ</a></li>
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
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/about.html  22 Nov 2019 10:03:54 GMT -->
</html>