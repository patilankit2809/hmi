<?php
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
    <link rel="stylesheet" type="text/css" href="signstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title> User signup</title>
    <script type="text/javascript">
        function vaidate()
        {
            var a = document.siginup.email.value;
            
            if (a.indexOf('@')<=0) 
            {
                alert(" cannot start with @ ");
                return false;
            }
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
                        
                        <li><a href="C:\xampp\htdocs\firebricks\home.html#properties">Properties</a></li>
                        <li><a href="C:\xampp\htdocs\firebricks\home.html#agents">Agents</a></li>
                        <li><a href="About.html">About us</a></li>
                        <li><a href="#"  class="active">Sign up</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>


    <section id="sign-section">

 		<div class="sign-div">
 			<h1>signup</h1>
	 		<div class="inputdiv">
	 			<form action="signup.php" method="post" name="siginup">
                    <div>
                        
                        <input name="username" type="text"  placeholder="Enter your username" id="userid" required="username is required">
                    </div>
                    <div>
                       
                        <input  type="text" name="fullname" placeholder="Enter your fullname" required="Full name is required">
                    </div>
		 			          <div>
                        
                        <input  type="text" name="email" placeholder="Enter your email" id="emails" required="" value=""><span id="emaile"></span>
                    </div>
                    <div> <input  type="text" name="phone" placeholder="Enter your phone number" required="Contact Number is required" max="10"></div>
                    <div>
                        
                        <input name="password" type="password"  placeholder="Enter Password" required="Enter password"></div>
                        
                        <div>
                        <input name="cpassword" type="password"  placeholder="confirm Password " required="Enter same as password">

                    </div>
		 			 <button name="submit_btn" class="rounded" type="submit" >sign up</button>
           <h5 style="text-align: center;">Already user ?</h5>
                 <a href="login.php" style="text-decoration: none;color: #777;">log in</a>
	 			</form>
        <?php
        
            if(isset($_POST['submit_btn']))
            {
                $username=$_POST['username'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];
                $fullname=$_POST['fullname'];
                $email=$_POST['email'];
                $phno=$_POST['phone'];
                if($password==$cpassword)
                {
                    $query ="select * from newuser where username='$username'";
                    
                    $query_run = mysqli_query($con,$query);
                
                if($query_run)
                    {
                        if(mysqli_num_rows($query_run)>0)
                        {
                            echo '<script type="text/javascript">swal("Sorry!", "This username already exist", "error");</script>';
                        }
                        else
                        {
                            $query = "insert into newuser values('','$username','$fullname','$email','$password','$phno')";
                            $query_run = mysqli_query($con,$query);
                            if($query_run)
                            {
                                echo '<script type="text/javascript">swal("Thank you !", "user registered", "success");</script>';
                                
                            }
                            else
                            {
                                echo '<script type="text/javascript">swal("Error!", "Please try again", "error");</script>';
                            }
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("DB error")</script>';
                    }
                }
                else
                {
                    echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
                }
                
            }
            else
            {
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
                    <li><a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="https://www.twitter.com/"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://www.linkedin.com/"><span class="fab fa-linkedin-in"></span></a></li>
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