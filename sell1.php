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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="buy.js" async></script>
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

                    <ul class="nav-menu">
                        
                        <li><a href="index.php#properties">Properties</a></li>
                        <li><a href="index.php#agents">Agents</a></li>
                        <li><a href="About.html" target="_blank">About us</a></li>
                        <li><a href="#"  class="active">SELL</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
<div class="sign-div">
  <h2 class="section-header" style="text-align: center;color: #f69314;margin-top: 20px;font-size: 30px;">SELL Properties </h2>
<div class="inputdiv" style="background-color: #fff;">
  <div id="insert_post" class="col-sm-12">
    <center>
    <form action="sell1.php" method="post" id="f" enctype="multipart/form-data">
    <input type="text" class="form-control" name="title" id="title" placeholder="enter Property name"><br>
    <input type="text" class="form-control" id="content" rows="7" name="content" placeholder="enter price"><br>
    <input type="text" class="form-control" name="type" id="type" placeholder="enter address"><br>
    <input type="text" name="address" placeholder="enter theamnities"><br><br>
    <label class="btn btn-warning" id="upload_image_button">Select Image
    <input type="file" name="upload_image" size="30" value="Select Image">
    </label><br>
    <button style="margin-top: 30px;padding-left: 50px;padding-right: 50px;" id="btn-post" class="btn btn-success" name="sub"> Post  </button>
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
$sql="insert into buy1(eid,price,img,pname,amnit,address) values('$post_id','$content','$folder','$title','$user','$type')";
$run=mysqli_query($conn,$sql);
if($run){
  $_SESSION['folder']=$folder;
  echo "<script>swal('Congrats!', 'Successfully registered', 'success');</script>";
  header( "Location: buy1.php");
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


    </center>
  </div>
</div>
</div>
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