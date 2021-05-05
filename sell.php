<?php
	session_start();
	include 'dbconfig/estateconfi.php';
	if (!$_SESSION['username']) 
	{
		header( "Location: login.php");
		exit;
	}
	error_reporting(0);
 	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIREBRICKS.</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="sellstyle.css" type="text/css" rel="Stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<title>Sell</title>
</head>
<body>
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
                        <li><a href="#">About us</a></li>
                        <li><a href="#"  class="active">Sign up</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>
<section id="signin-section">
<div class="sign-div">
	<h1>Property detail form</h1>
	<div class="inputdiv">
	<form action="sell.php" method="POST" >
		<div>
		<div>
            <label>Enter your property name :</label>
            <input name="proname" type="text" placeholder="Enter your property name" required="can't be empty">
        </div>
        <div>
            <label>Enter price of your property :</label>
            <input name="proprice" type="text"  placeholder=" price" required="can't be empty">
        </div>
        <div>
            <label>Enter aminities in your property :</label>
            <input name="proamnities" type="text"  placeholder="aminities" required="can't be empty">
        </div>
        <div>
            <label>Enter address of your property :</label>
            <input name="proaddress" type="text"  placeholder="address" required="can't be empty">            
        </div>
       </div>
        <button name="submit" class="rounded" id="insert">sign up</button>
    </form>
     <?php
     if(isset($_POST['submit'])){
	        	$name = $_POST['proname'];
	        	$price = $_POST['proprice'];
	        	$aminities = $_POST['proamnities'];
	        	$address = $_POST['proaddress'];

	        	$query = "insert into buy values('$name','$price','$aminities','$address')";
	        	$check = mysqli_query($conn,$query);
	        	if ($check) 
	        	{
	        		header( "Location: buy.php");
	        	}
	        }

    ?>
    </div>
    </div>
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