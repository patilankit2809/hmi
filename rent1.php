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
        
        <script type="text/javascript">
      function myfunct()
      {
        swal("Thank you !", "our agent will contact you", "success");
      }
    </script>
	<title>Rent</title>
</head>
<body style="font-family: 'Roboto', 'Helvetica', 'Sans-serif';
    margin: 0;
    padding: 0;
    font-size: 1rem;
    font-weight: 400; 
    color: #808080;
    line-height: 1.7">
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
                        <li><a href="rent.php"  class="active">RENT</a></li>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>

	  <?php
	  	session_start();
	require 'dbconfig/estateconfi.php';
	if (!$_SESSION['username']) 
	{
		header( "Location: login.php");
		exit;
	}
  $query="select * from rent1 order by eid desc";
  $run_query=mysqli_query($conn,$query);
  while($row_posts=mysqli_fetch_array($run_query))
  {
    $image=$row_posts['rimg'];
    $content=$row_posts['rprice'];
    $title=$row_posts['rname'];
    $user=$row_posts['amni'];
    $date=$row_posts['addres'];
    $id=$row_posts['eid'];
    $set=0;
    
      echo"<section id='agents'>
            <center><div class='container'>
              <h2>Property</h2>

                  <div class='flex'>  
                    <div class='card'>
        <center> <img id='posts-img=' src='$image' alt:'' class='slider-image' style='width:22%;'>

        </div>
                  </div>

            </div>
            <div class='shop-item-details'>
                      <span class='price' style='color:black;font-size:1.5rem;font-weight:600;'>$title </span>
                        <span class='bed' style='color:black;font-size:1rem;font-weight:600;'>$content</span>
                        <span class='sqft' style='color:black;font-size:1rem;font-weight:600;'> $user</span>
                       
                        <address style='color:black;font-size:1rem;font-weight:600;'>
                             $date
                        </address>
                       <button class='btn btn-primary btn-purchase rounded' type='button' style='background: #f69314;border: none;color: #fff;font-size: 16px;border-radius: 30px;padding: 10px 30px;line-height: 1.5;cursor: pointer;' onclick='myfunct()'>intrested</button>
                    </div>
          </section>";
      }
    ?><footer>
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
</body>
</html>
