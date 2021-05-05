<?php
	session_start();
  include("dbconfig/estateconfi.php");
	// require 'dbconfig/estateconfi.php';
	if (!$_SESSION['username']) 
	{
		header( "Location: login.php");
		exit;
	}
/*                <div class="shop-item">
                    <span class="shop-item-title">Propertie 2</span>
                    <img class="shop-item-image" src="Images/property_2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">5000</span>
						<span class="shop-item-price">per day</span>
                        <button class="btn btn-primary shop-item-button"type="button">Rent</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Propertie 3</span>
                    <img class="shop-item-image" src="Images/property_3.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">5000</span>
						<span class="shop-item-price">per day</span>
                        <button class="btn btn-primary shop-item-button" type="button">Rent</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Propertie 4</span>
                    <img class="shop-item-image" src="Images/property_4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">5000</span>
						<span class="shop-item-price">per day</span>
                        <button class="btn btn-primary shop-item-button" type="button">Rent</button>
                    </div>
                </div>
                <button class="btn btn-primary btn-purchase" type="button">Borrowed</button>
                <div class="cart-row">
                <span class="cart-item cart-header cart-column">Properties</span>
                <span class="cart-price cart-header cart-column">Amount</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rs 0</span>
            </div>*/error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	 <script src="buy.js" async></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIREBRICKS.</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="description" content="This is the description">
<link rel="stylesheet" type="text/css" href="rentsty.css">
        <script src="rent.js" async></script>
	<title>Rent</title>
</head>
    <body style="    font-family: 'Roboto', 'Helvetica', 'Sans-serif';
    margin: 0;
    padding: 0;
    font-size: 1rem;
    font-weight: 400;
    color: #777;
    line-height: 1.7;">
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
                        <li><a href="">Home</a></li>
                        <li><a href="index.php#properties">Properties</a></li>
                        <li><a href="index.php#agents">Agents</a></li>
                        <li><a href="About.html">About us</a></li>
                        <li><a href="#"  class="active">RENT</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
      
        <div class="sign-div">
  <h2 class="section-header" style="text-align: center;color: #f69314;margin-top: 20px;font-size: 30px;">RENT Properties </h2>
<div class="inputdiv" style="background-color: #fff;">
  <div id="insert_post" class="col-sm-12">
    <center>
    <form action="" method="post" id="f" enctype="multipart/form-data">
    <input type="text" class="form-control" name="title" id="title" placeholder="enter Property name"><br>
    <input type="text" class="form-control" id="content" rows="7" name="content" placeholder="enter rent"><br>
    <input type="text" class="form-control" name="type" id="type" placeholder="enter address"><br>
    <input type="text" name="address" placeholder="enter the amnities"><br><br>
    <label class="btn btn-warning" id="upload_image_button">Select Image
    <input type="file" name="upload_image" size="30" value="Select Image">
    </label><br>
    <button style="margin-top: 30px;padding-left: 50px;padding-right: 50px;" id="btn-post" class="btn btn-success" name="sub"> Post ad </button><br>

    <?php
if(isset($_POST['sub']))
{
global $post_id;
$filename=$_FILES["upload_image"]["name"];
$tempname=$_FILES["upload_image"]["tmp_name"];
$folder="images/".$filename;
$content=$_POST['content'];
$title=$_POST['title'];
$user=$_POST['address'];
$type=$_POST['type'];
if(strlen($filename) >= 1 && strlen($content) >= 1){
move_uploaded_file($tempname, $folder);
$sql="insert into rent1(eid,addres,rimg,rname,amni,rprice) values('$post_id','$type','$folder','$title','$user','$content')";
$run=mysqli_query($conn,$sql);
if($run){
  $_SESSION['folder']=$folder;
  echo "<script>swal('Congrats!', 'Successfully posted ad', 'success')</script>";
  header( "Location: rent1.php");
  }
  else
  {
    echo "<script>alert('Your1 ad is Post!')</script>";
  }
}
}
?>
    
    <?php
/*if(isset($_POST['logout']))
{
session_start();
session_destroy();
header("location:login.php");
}*/
?>

    </form>

   <a href="rent1.php"><button style="margin-top: 30px;padding-left: 50px;padding-right: 50px;" id="btn-post"> want to rent a property </button></a> 
    </center>
  </div>
</div>
</div>

        <?php
    /*if(isset($_POST['submit']))
     {
	        	$name = $_POST['proname'];
	        	$price = $_POST['proprice'];
	        	$aminities = $_POST['proamnities'];
	        	$address = $_POST['proaddress'];

	        	$query = "insert into rent values('$name','$price','$aminities','$address')";
	        	$check = mysqli_query($conn,$query);
	        	if ($check) 
	        	{
	        		header( "Location: rent.php");
	        	}
	        }
*/
    ?>
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
    </body>
        <script type="text/javascript">
$(function () {
            let headerElem = $('header');
            let logo = $('#logo');
            let navMenu = $('.nav-menu');
            let navToggle = $('#nav-toggle');

           $('#properties-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
                nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
                responsive: [
                    {
                        breakpoint: 1100,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 530,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    }
                ]
           });

           $('#testimonials-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<a href="#" class="slick-arrow slick-prev"><</a>',
                nextArrow: '<a href="#" class="slick-arrow slick-next">></a>'
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
</html>