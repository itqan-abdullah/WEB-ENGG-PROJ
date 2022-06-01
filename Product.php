<?php 
error_reporting(0);
session_start();
/////cart
if (isset($_GET['submitcart']))
{    

    if(isset($_SESSION['cart']))
    {
        
        $sources = array_column($_SESSION['cart'],'src');
        if (in_array($_GET['src'],$sources))
        {
            $num = array_search($_GET['src'],$sources);
            $_SESSION['cart'][$num]['quantity'] = $_SESSION['cart'][$num]['quantity'] +  $_GET['quantity'];
             
            
        }
        else
        {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array( 'title' => $_GET['title'] , 'price' => $_GET['price'],
            'quantity' => $_GET['quantity'], 'pageName' =>  $_SERVER['SCRIPT_NAME'],
            'src' => $_GET['src'] , 'id' => $_GET['id']  );
             
         }
    }
    else
    {
            $_SESSION['cart'][0] = array( 'title' => $_GET['title'] , 'price' => $_GET['price'],
            'quantity' => $_GET['quantity'], 'pageName' =>  $_SERVER['SCRIPT_NAME'],
            'src' => $_GET['src']  , 'id' => $_GET['id'] );
             
    }
           

}
if(isset($_SESSION['cart']))
{
    $sum = 0;
    for ($i=0; $i < count($_SESSION['cart']) ; $i++) 
    { 
        $sum =$sum +( intval($_SESSION['cart'][$i]['quantity'])  * intval( $_SESSION['cart'][$i]['price']));
    }
    
}
else{
    $sum = 0;
}
$_SESSION['sum'] = $sum;


/////cart end
////item stuff
$dblink = mysqli_connect("localhost:3307","root","","store");  
if(!$dblink)
{
    echo "No conn ";
    exit();
}
if (isset($_GET['linkfromcart']) && !isset($_GET['item_id']) && !isset($_GET['cartlink']) && !isset($_GET['submitcart'])  )
{
    $_GET['item_id'] = $_GET['linkfromcart'];
}

else if (!isset($_GET['item_id']) && !isset($_GET['cartlink'])  )
{
     $_GET['item_id'] = $_GET['id'];
    
}
else if (!isset($_GET['item_id']) && !isset($_GET['submitcart'])  )
{
    $_GET['item_id'] = $_GET['linkfromcart'];

}



$Query = "SELECT * from item INNER JOIN category on item.category_id = category.category_id where item.item_id =".$_GET['item_id']." ;
";

$result = mysqli_query($dblink,$Query);
$result = mysqli_fetch_assoc($result);

////item end


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
    <title> Relax Fit Magic Hoodie - Unstiched - Women - The Cloth Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
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
                                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a>
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

                                    <span class="cart-total-price">Rs. <?php echo $sum ?></span>
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
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"></a><?php echo $result['type'] ?></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $result['product_type'] ?></li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <form action="Product.php" method = "GET">
            <div class="page-content">
                <div class="container">
                    <div class="product-details-top mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="<?php echo $result['img_src1'] ?>"
                                                data-zoom-image="<?php echo $result['img_src1'] ?>" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                        <div style="height: 230px;;" id="product-zoom-gallery"
                                            class="product-image-gallery">
                                            <a class="product-gallery-item active" href="#"
                                                data-image="<?php echo $result['img_src1'] ?>"
                                                data-zoom-image="<?php echo $result['img_src1'] ?>">
                                                <img src="<?php echo $result['img_src1'] ?>" alt="product side">
                                            </a>

                                            <a class="product-gallery-item" href="#"
                                                data-image="<?php echo $result['img_src2'] ?>"
                                                data-zoom-image="<?php echo $result['img_src2'] ?>">
                                                <img src="<?php echo $result['img_src2'] ?>" alt="product cross">
                                            </a>
                                        </div><!-- End .product-image-gallery -->
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details product-details-centered">
                                    <h1 class="product-title"><?php echo $result['title'] ?> 
                                    </h1>
                                    <!-- End .product-title -->

                                    <div class="product-price">
                                        Rs. <?php echo $result['price'] ?>
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                       <p>
                                        This <?php echo $result['title']." " ?>is designed by TheClothStore - Being a part of our TheClothStore Design District, TheClothStore set off the product price, so it may vary from our regular prices.
                                       </p>
                                    </div><!-- End .product-content -->


                                    <div class="details-filter-row details-row-size">
                                        <label for="size">Size:</label>
                                        <div class="select-custom">
                                            <select name="size" id="size" class="form-control">
                                                <option value="#" selected="selected">Small</option>
                                                <option value="#" selected="selected">Medium</option>
                                                <option value="#" selected="selected">Large</option>
                                                <option value="#" selected="selected">X-Large</option>
                                                <option value="#" selected="selected">XX-Large</option>
                                            </select>
                                        </div><!-- End .select-custom -->

                                       
                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <div class="details-action-col">
                                            <div class="product-details-quantity">
                                                <input type="number" name='quantity'  id="qty" class="form-control" value="1" min="1"
                                                    max="10" step="1" data-decimals="0" required>
                                            </div><!-- End .product-details-quantity -->

                                            
                                            <input type="hidden" name = 'title' value = "<?php echo $result['title'] ?>"> 
                                            <input type="hidden" name = 'id' value = "<?php echo $result['item_id'] ?>"> 
                                            <input type="hidden" name = 'price' value = "<?php echo $result['price'] ?>"> 
                                            <input type="hidden" name = 'src' value = "<?php echo $result['img_src1'] ?>"> 
                                            <button style = "background-color: Transparent" 
                                            type = "submit" name = "submitcart"  class="btn-product btn-cart"><span>add to cart</span></button>
                                            </form>
                                        </div><!-- End .details-action-col -->
                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <a href="#"><?php echo $result['type'] ?></a>,
                                            <a href="#"><?php echo $result['product_type'] ?></a>
                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                                    class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                    class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                                    class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i
                                                    class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab"
                                    href="#product-desc-tab" role="tab" aria-controls="product-desc-tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab"
                                    role="tab" aria-controls="product-info-tab" aria-selected="false">Additional
                                    information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-shipping-link" data-toggle="tab"
                                    href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab"
                                    aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab"
                                    href="#product-review-tab" role="tab" aria-controls="product-review-tab"
                                    aria-selected="false">Reviews (2)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                                aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Description</h3>
                                    <p>Features:</p>
                                    <ul>
                                        <li>Soft fabric</li>
                                        <li>Highly durable</li>
                                        <li>Unique Print</li>
                                       <li> Wash Light And Bright Colors Separately. Do Not Bleach.</li>
                                        <li>Do Not Dry In Direct Sunlight</li>
                                        <li>Do Not Twist/Wring, Warm Iron To Sequined, Beaded, And Delicate Fabrics.</li>
                                    </ul>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-info-tab" role="tabpanel"
                                aria-labelledby="product-info-link">
                                <div class="product-desc-content">
                                    <h3>Design Description</h3>
                                    <p>The warehouse brings you the best quality Chill FULL SLEEVES T-SHIRTS in Pakistan
                                        for Rs. 2499.00 only. Browse hundreds of products online at the Pakistan's
                                        leading online shopping store including at Thewarehouse.pk</p>

                                    <p>Find the 2022 Chill FULL SLEEVES T-SHIRTS price in Pakistan online. You can now
                                        shop thousands of products in all major cities of Pakistan including Chill FULL
                                        SLEEVES T-SHIRTS in Karachi, Chill FULL SLEEVES T-SHIRTS in Lahore, Faisalabad,
                                        Islamabad, Multan and other cities of Pakistan with payment on delivery.</p>


                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel"
                                aria-labelledby="product-shipping-link">
                                <div class="product-desc-content">
                                    <h3>Delivery & returns</h3>
                                    <p>This is a made to order product, its hand sewn just for you. It takes 5-7 days to
                                        manufacture and ship your product.</p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-review-tab" role="tabpanel"
                                aria-labelledby="product-review-link">
                                <div class="reviews">
                                    <h3>Reviews (2)</h3>
                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <h4>19****10</h4>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <span class="review-date">6 days ago</span>
                                            </div><!-- End .col -->
                                            <div class="col">
                                                <h4>Good, perfect size</h4>

                                                <div class="review-content">
                                                    <p>Great Product</p>
                                                </div><!-- End .review-content -->

                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div><!-- End .review -->

                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <h4>21****98</h4>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div>
                                                        <!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <span class="review-date">5 days ago</span>
                                            </div><!-- End .col -->
                                            <div class="col">
                                                <h4>Very good</h4>

                                                <div class="review-content">
                                                    <p>Great Product</p>
                                                </div><!-- End .review-content -->


                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div><!-- End .review -->
                                </div><!-- End .reviews -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->

                    <h2 class="title text-center mb-4">Other Products</h2><!-- End .title text-center -->
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="Good Miami Full Sleeves T-Shirts-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="Good Miami Full Sleeves T-Shirts-2.jpg" alt="Product Image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">
                                        <Menu:context></Menu:context>
                                    </a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Good Miami Full Sleeves T-Shirts </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    Rs.2,499
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="Future UNISEX HOODIE-1.jpg" alt="Product image" class="product-image">
                                    <img src="Future UNISEX HOODIE-2.jpg" alt="Product Image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">
                                        <Menu:context></Menu:context>
                                    </a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Future UNISEX HOODIE </a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    Rs.2,499
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="Blue Goku Hoodie.jpg" alt="Product image" class="product-image">
                                    <img src="Blue Goku Hoodie.jpg" alt="Product Image" class="product-image-hover">
                                </a>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">
                                        <Menu:context></Menu:context>
                                    </a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Blue Goku Hoodie</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    Rs.1,499
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="Cookies Printed Graphic T-Shirt-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="Cookies Printed Graphic T-Shirt-2.jpg" alt="Product Image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">
                                        <Menu:context></Menu:context>
                                    </a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Cookies Printed Graphic T-Shirt </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    Rs.999
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer footer-dark">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="logo-removebg.png" class="footer-logo" alt="Footer Logo" width="105"
                                    height="25">


                                <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                            class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i
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
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="">Log In</a></li>
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

    <!-- Plugins JS File -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $('#cart_add').click(function(){

            alert("");
            $('.dropdown-menu dropdown-menu-right').append("");
        })

        $(function(){

		$("#cart-items").slideUp();
		$(".cart").on("click", function () {
		$("#cart-items").slideToggle();
		});

		$("#items-basket").text("(" + ($("#list-item").children().length) + ")");

		
		$(".item").on("click", function () {
      $("#cart-items").slideDown();
     setTimeout(function(){
        $("#cart-items").slideUp();
     }, 2000)
			//add items to basket
			$(this).each(function () {
				var name = $(this).children(".item-detail").children("h4").text();
				var remove = "<button class='remove'> X </button>";
				var cena = "<span class='eachPrice'>" + (parseFloat($(this).children(".item-detail").children(".prices").children(".price").text())) + "</span>";
				$("#list-item").append("<li>" + name + "&#09; - &#09;" + cena + "$" + remove + "</li>");

				//number of items in basket
				$("#items-basket").text("(" + ($("#list-item").children().length) + ")");
				$("#items-basket").text();
        
	        //calculate total price
	        var totalPrice = 0;
		        $(".eachPrice").each(function (){ 
		          var cenaEach = parseFloat($(this).text());
		          totalPrice+=cenaEach;
		        });
		        $("#total-price").text(totalPrice + "$");
			});

			//remove items from basket
			$(".remove").on("click", function () {
				$(this).parent().remove();

		        var totalPrice = 0;
		        $(".eachPrice").each(function (){ 
		          var cenaEach = parseFloat($(this).text());
		          totalPrice+=cenaEach;
		        });
		        $("#total-price").text(totalPrice + "$");
				$("#items-basket").text("(" + ($("#list-item").children().length) + ")");
			});
		});
})
    </script>
</body>


<!-- molla/product-centered.html  22 Nov 2019 10:03:20 GMT -->

</html>