<?php
	session_start();
  error_reporting(0);
	require 'dbconfig/estateconfi.php';
	if (!$_SESSION['username']) 
	{
		header( "Location: login.php");
		exit;
	}
	/*<div class="shop-item">
                    <span class="shop-item-title">Propertie 2</span>
                    <img class="shop-item-image" src="Images/property_2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">34.00.000</span>
                        <button class="btn btn-primary shop-item-button"type="button">Buy</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Propertie 3</span>
                    <img class="shop-item-image" src="Images/property_3.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">34.00.000</span>
                        <button class="btn btn-primary shop-item-button" type="button">Buy</button>
                    </div>
                </div>//<img class="shop-item-image"  src='$image'>
                <div class="shop-item">
                    <span class="shop-item-title">Propertie 4</span>
                    <img class="shop-item-image" src="Images/property_4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">34.00.000</span>
                        <button class="btn btn-primary shop-item-button" type="button">Buy</button>
                    </div>
                </div>*/
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="signstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BUY</title>
	<link rel="stylesheet" href="buystyle.css" />
    <script src="buy.js" async></script>
   
</head>
<body>
	<div id="header-transi-container">
	    <header>
            <div class="flex container">
                <a id="logo" href="#">FIREBRICKS.</a>
                <nav>
                    <button id="nav-toggle" class="strip-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>

                    <ul class="nav-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="C:\xampp\htdocs\firebricks\home.html#properties">Properties</a></li>
                        <li><a href="C:\xampp\htdocs\firebricks\home.html#agents">Agents</a></li>
                        <li><a href="About.html">About us</a></li>
                        <li><a href="#"  class="active">Buy</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
        <section class="container content-section">
            <h2 class="section-header">Properties</h2>
            <?php 
            	$res=mysqli_query($conn,"select * from buy1");
            	while ($row=mysqli_fetch_array($res)) 
              {
                $image=$row_posts['img'];
            		?>
            		<div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Propertey </span>
                  
                  <?php echo "<img id='posts-img=' src='$image' alt:'' class='shop-item-title'>"; ?>
                    <div class="shop-item-details">
                    	<span class="shop"><?php echo $row["pname"];?></span>
                        <span class="shop-item-price"><?php echo $row["price"];?></span>
                        <span class="beds"><?php echo $row["amnit"];?></span>
                       
                        <address>
                            <?php echo $row["address"];?>
                        </address>
                        <button class="btn btn-primary shop-item-button" type="button">Buy</button>
                    </div>
                </div>
                
            </div>
            		<?php
            		# code...
            	}
            ?>
            
        </section>
  
        <section class="container content-section">
            <h2 class="section-header">Properties Bought</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">Properties</span>
                <span class="cart-price cart-header cart-column">Amount</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rs 0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
    <footer>
        <div class="flex container">

            <div class="footer-about">
                <h5>About FIREBRICKS</h5>
                <p>Property Sahi. Milegi Yahin.India's No. 1 Property Site is now a Superbrand</p>
            </div>

            <div class="footer-quick-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-subscribe" id="address-container">
                <label>Address</label>
                    <address>
                        Uttam Nagar, New Delhi
                    </address>

                    <label>Phone</label>
                    <h5>232-232-2323</h5>

                    <label>Email Address</label>
                    <h5>ouremail@domain.com</h5>

                <label class="follow-us">Follow Us</label> 

                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>

            </div>

        </div>

        <small>
            Copyright &copy; 2019 All rights reserved 
        </small>

    </footer>
        <script type="text/javascript">
        $(function (){
            let headerElem = $('header');
            let logo = $('#logo');
            let navMenu = $('.nav-menu');
            let navToggle = $('#nav-toggle');
             navToggle.on('click', () => {
               navMenu.css('right', '0');
           });

            navToggle.on('click', () => {
               navMenu.css('right', '0');
           });

           $('#close-flyout').on('click', () => {
                navMenu.css('right', '-100%');
           });

           $(document).on('click', (e) => {
               let target = $(e.target);
               if (target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0) {
                   return false;
               }

               navMenu.css('right', '-100%');
           });

           $(document).scroll(() => {
               let scrollTop = $(document).scrollTop();

               if (scrollTop > 0) {
                   navMenu.addClass('is-sticky');
                   logo.css('color', '#000');
                   headerElem.css('background', '#fff');
                   navToggle.css('border-color', '#000');
                   navToggle.find('.strip').css('background-color', '#000');
               } else {
                   navMenu.removeClass('is-sticky');
                   logo.css('color', '#f69314');
                   headerElem.css('background', 'transparent');
                   navToggle.css('bordre-color', '#fff');
                   navToggle.find('.strip').css('background-color', '#000');
               }

               headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
           });
           $(document).trigger('scroll');
       });
    </script>

</body>
</html>