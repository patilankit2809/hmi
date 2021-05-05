<?php
	session_start();
	require 'dbconfig/estateconfi.php';
	error_reporting(0);
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
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Propertie 4</span>
                    <img class="shop-item-image" src="Images/property_4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">34.00.000</span>
                        <button class="btn btn-primary shop-item-button" type="button">Buy</button>
                    </div>
                </div>

                <section class='agents'><div class='agents'>
						<img id='posts-img=' src='$image' alt:'' class='slider-image' >
					<div class='post-info'> 
						<h4><a href='brief.php?id=$id'>$title</a></h4>
						
						&nbsp;
						
					</div>
				</div></section>*/
?>

<!DOCTYPE html>
<html>
<head>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	 <script src="buy.js" async></script>
	<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FIRE|BUY</title>
	<link rel="stylesheet" href="buystyle.css" />
    <script type="text/javascript">
      function myfunct()
      {
        swal("Thank you !", "our agent will contact you", "success");
      }
    </script>
   
</head>
<body>
	<div id="header-transi-container">
	    <header>
            <div class="flex container">
                <a id="logo" href="index.php">FIREBRICKS.</a>
                <nav>
                    <button id="nav-toggle" class="strip-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>

                    <ul class="nav-menu" style="">
                       
                        <li><a href="index.php#properties">Properties</a></li>
                        <li><a href="index.php#agents">Agents</a></li>
                        <li><a href="About.html">About us</a></li>
                        <li><a href="#"  class="active">Buy</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div >


<?php
	
	$query="select * from buy1 order by eid desc";
	$run_query=mysqli_query($conn,$query);
	while($row_posts=mysqli_fetch_array($run_query))
	{
		$image=$row_posts['img'];
		$content=$row_posts['price'];
		$title=$row_posts['pname'];
		$user=$row_posts['amnit'];
		$date=$row_posts['address'];
		$id=$row_posts['eid'];
		$set=0;
		
			echo" <from action='buy1.php' method='post' name='siginup'>    <div class='container'>
            <h2>Properties</h2>
            <div id='properties-slider' class='slick'>
                <div>
                    <img src='$image' alt='Property 1' style='width:22%;' />
                    
                    <div class='property-details' >
                        <p class='price'  style='color:black;font-size:1rem;font-weight:600;'>$title</p>
                        <span class='baths dark' id='dark'  style='color:black;font-size:1rem;font-weight:600;'>$content</span>
                        <span class='beds dark' id='darki'  style='color:black;font-size:1rem;font-weight:600;'>  $user</span>
                        
                        
                        <address  style='color:black;font-size:1rem;font-weight:600;'>
                           $date
                        </address>
                    </div>
                </div><button name='click' class='btn btn-primary btn-purchase rounded' onclick='myfunct()' type='button'>Intrested</button></div></div></form>";

			}
		?>

        <footer>
        <div class="flex container">

            <div class="footer-about">
                <h5>About FIREBRICKS</h5>
                <p>Property Sahi. Milegi Yahin.</p>
            </div>

            <div class="footer-quick-links">
                <h5>Quick Links</h5>
                <ul>
                     <li><a href="About.html">About Us</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li><a href="index.php#testimonials">Testimonials</a></li>
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
                    <li><a href="https://www.facebook.com/" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="https://www.twitter.com/" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
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