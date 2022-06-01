<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['cart']))
{
    echo "Cart Empty\n";
    exit();
}



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
    <title>Checkout - The Cloth Store</title>
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
                                <span class="cart-count">1</span>
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

                                    <span class="cart-total-price">Rs. <?php echo $_SESSION['total'] ?></span>
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
        	<div class="page-header text-center" style="background-image: url('Cover.jpg')">
        		<div class="container">
        			<h1 class="page-title">Checkout<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Home.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="cart.html">Cart</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<div class="checkout-discount">
            				<form action="#">
        						<input type="text" class="form-control" required id="checkout-discount-input">
            					<label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
            				</form>
            			</div><!-- End .checkout-discount -->
            			<form action="CheckoutSuccessMessage.php" method = "GET">
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>First Name *</label>
		                						<input name = "fname" type="text" class="form-control" placeholder="e.g. John" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Last Name *</label>
		                						<input name ="lname" type="text" class="form-control" placeholder="e.g. John" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Country *</label>
	            						<input type="text" class="form-control" placeholder="e.g. Pakistan" required>

	            						<label>Street address *</label>
	            						<input name ='HouseNumber' type="text" class="form-control" placeholder="House number and Street name" required>
	            						<input name ='Apartment'  type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." required>

	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City *</label>
		                						<input name ='city' type="text" class="form-control" placeholder="e.g. Islamabad" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>State / County *</label>
		                						<input name ='state' type="text" class="form-control" placeholder="e.g. ICT" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode / ZIP *</label>
		                						<input name ='postalcode' type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input name ='phone' type="tel" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	                					<label>Email address *</label>
	        							<input name ='email' type="email" class="form-control" required>

	        							

	                					<label>Order notes (optional)</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
		                						<?php
                                                
                                                for ($i = 0; $i < $len ; $i++)
                                                {
                                                    echo ("<tr>
		                							<td>".$_SESSION['cart'][$i]['quantity']."x ".$_SESSION['cart'][$i]['title']."</td>
		                							<td>".( intval($_SESSION['cart'][$i]['quantity'])  * intval( $_SESSION['cart'][$i]['price']))."</td>
		                						</tr>");
                                                }
                                                ?>

		                					
		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                							<td><?php echo ($_SESSION['total'] - $_SESSION['ship_fee']); ?></td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Shipping:</td>
		                							<td><?php 
                                                    if ($_SESSION['ship_fee'] == 0)
                                                    {
                                                        echo "Free";
                                                    }
                                                    else if ($_SESSION['ship_fee'] == 100)
                                                    {
                                                        echo "Standard";
                                                    }
                                                    else
                                                    {
                                                        echo "Express";
                                                    }
                                                    ?></td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Total: </td>
		                							<td><?php echo $_SESSION['total'] ;?></td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    Direct bank transfer
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-2">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										                    Check payments
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
										            
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                    Cash on delivery
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

								
										    <div class="card">
										        <div class="card-header" id="heading-5">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										                    Credit Card
										                    <img src="assets/images/payments-summary.png" alt="payments cards">
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
										            
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
										</div><!-- End .accordion -->

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
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
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>