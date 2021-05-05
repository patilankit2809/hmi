<?php
    session_start();
    require 'dbconfig/config.php';
         error_reporting(0);                  
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="logstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title> User Login</title>
        <script type="text/javascript">
      function myfunct()
      {
        swal("Thank you !", "our agent will contact you", "success");
      }
    </script>
</head>
<body>
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
                        <li><a href="About.html">About us</a></li>
                        <li><a href="#"  class="active">Sign up</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            
        </header>
     </div>

 	<section id="login-section">

 		<div class="login-div">
 		<h1>Login</h1>
    <form action="Login.php" method="post">
  	 	<div class="inputdiv">
    	 	<i class="fas fa-user"></i>
        <div>
    	 	<input type="text" name="username" placeholder="Username">
        </div>
    	 	<i class="fas fa-lock"></i>
        <div>
    	   <input  name="password" type="password" name="password" placeholder="Password">
        </div>
    	 	<button name="login" class="rounded">login</button>
    	 	<h5>new user ?</h5>
        <a href="signup.php" style="text-decoration: none;color: #777">sign up</a>
  	 	</div>
    </form>
    <?php
            if(isset($_POST['login']))
            {
                $username=$_POST['username'];
                $password=$_POST['password'];
                $query = "select * from newuser where username='$username' and password='$password' ";
                //echo $query;
                $query_run = mysqli_query($con,$query);
                //echo mysql_num_rows($query_run);
                //if($query_run)
                //{
                    if(mysqli_num_rows($query_run)>0)
                    {
                    //$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
                    
                    $_SESSION['username'] = $username;
                   // $_SESSION['password'] = $password;
                    
                    header( "Location: index.php");
                    }
                    else
                    {
                        echo '<script type="text/javascript">swal("Sorry!", "Invalid credentials", "error");</script>';
                    }
                //}
               // else
                //{
                //    echo '<script type="text/javascript">alert("DB Error")</script>';
                //}
            }
            else
            {
            }

            if ($count==1) 
            {
              //session_start();
               $_SESSION['loggedin'] = true;
                $_SESSION['uname'] = $username;
            }
        ?>

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
                    <li><a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a></li>
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