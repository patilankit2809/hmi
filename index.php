<?php
  session_start();
  require 'dbconfig/estateconfi.php';
  error_reporting(0);
  /*if (!$_SESSION['username']) 
  {
    header( "Location: login.php");
    exit;
  }<div>
                    <img src="images/2.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">₹93.8 Lac</p>
                        <span class="sqft">Society Vicinia.</span>
                        <span class="beds">Bedroom 1</span>
                        <span class="baths">Bathrooms 2</span>
                        
                        <address>
                           Mahim, Mumbai - South Mumbai, Maharashtra
                        </address>
                    </div>
                </div>

                <div>
                    <img src="images/3.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">₹3,400,000</p>
                        <span class="sqft">Society Devchhaya.</span>
                        <span class="beds">6 beds</span>
                        <span class="baths">4 baths</span>
                        
                        <address>
                           Uttam Nagar, New Delhi
                        </address>
                    </div>
                </div>

                <div>
                    <img src="images/4.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">₹2.40 Cr</p>
                        <span class="sqft">Society 1 OSR.</span>
                        <span class="beds">Bedroom 1</span>
                        <span class="baths">Bathrooms 2</span>
                        
                        <address>
                           Dahisar East, Mumbai - Western Suburbs, Maharashtra
                        </address>
                    </div>
                </div>
                <div>
                    <img src="images/4.jpg" alt="Property 1" />
                    <div class="property-details">
                        <p class="price">₹2.40 Cr</p>
                        <span class="sqft">Society 1 OSR.</span>
                        <span class="beds">Bedroom 1</span>
                        <span class="baths">Bathrooms 2</span>
                        
                        <address>
                           Dahisar East, Mumbai - Western Suburbs, Maharashtra
                        </address>
                    </div>*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIREBRICKS.</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="style.css" type="text/css" rel="Stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body style="    font-family: 'Roboto', 'Helvetica', 'Sans-serif';
    margin: 0;
    padding: 0;
    font-size: 1rem;
    font-weight: 400; 
    color: #808080;
    line-height: 1.7">
<form action="index.php" method="post">
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
                        
                        <li><a href="index.php#properties">Properties</a></li>
                        <li><a href="index.php#agents">Agents</a></li>
                        <li><a href="About.html" target="_blank">About us</a></li>
                        <form action="index.php" method="post">

                          <?php 
                            if (!$_SESSION['username']) 
                            {
                                echo "<li><a href='login.php' target='_blank' >Login </a></li>";
                            }
                            else
                            {
                              echo "<li><button style='color: white;border-radius:30px; border: none;background-color:#f69314;' name='login' type='none'><i class='fas fa-user'></i></button></li>";
                              
                            }
                          ?>
                                                   
                        
                        
                        
                        </form>
                        <?php
                            if(isset($_POST['login'])) 
                            {
                                session_destroy();
                                header('location:login.php');
                            }
                            else
                            {
                               // echo '<script type="text/javascript">alert(" Invalid Credentials")</script>';
                            }
                        ?>
                        <li id="close-flyout"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="hero">
            <div class="fade"></div>
            <div class="hero-text">
                <h1>Buy and sell real estate properties</h1>
                <p>Property Sahi. Milegi Yahin.India's No. 1 Property Site is now a Superbrand</p>
            </div>
        </section>
     </div>

  <section id="work">
    <div class="container">
      <h2>How it works</h2>
      <div class="flex">
        <div>
          <span class="fas fa-building"></span>
          <a href="sell1.php" >Sell a property</a>
        </div>

        <div>
          <span class="fas fa-rupee-sign"></span>
          <a href="buy1.php" >Buy a property</a>
        </div>

        <div>
          <span class="fas fa-home"></span>
          <a href="rent.php" >Rent a property</a>
        </div>
      </div>
    </div>
  </section>

  <section id="properties">
     <div class="container">
            <h2>Properties</h2>
            <div id="properties-slider" class="slick">
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
    
      echo"     <div class='container'>
            
            <div id='properties-slider' class='slick'>
                <div>
                    <img src='$image' alt='Property 1' /><br>
                    
                    <div class='property-details'>
                        <p class='price'>$title</p>
                        <span class='baths'>$content</span>
                        <span class='beds'>$user</span>
                        
                        
                        <address>
                            $date
                        </address>
                    </div>
                </div></div></div>";
      }
    ?>

                
                </div>
            </div>

            <a href="buy1.php" style="text-decoration: none;"><button class="rounded">View All Property Listings</button></a>
        </div>
  </section>

  <section id="agents">
    <div class="container">
      <h2>Agents</h2>

      <div class="flex">

        <div class="card">
          <img src="images/person_5.jpg" alt="Relator 1">
          <h3>Nick Andros</h3>
          <p>Real estate agent</p>
        </div>

        <div class="card">
          <img src="images/person_7.jpg" alt="Relator 1">
          <h3>Larry Underwood</h3>
          <p>Real estate agent</p>
        </div>

        <div class="card">
          <img src="images/person_8.jpg" alt="Relator 1">
          <h3>Kaiara Spencer</h3>
          <p>Real estate agent</p>
        </div>

        <div class="card">
          <img src="images/person_8.jpg" alt="Relator 1">
          <h3>Rita Spencer</h3>
          <p>Real estate agent</p>
        </div>

      </div>

    </div>
  </section>

  <section id="services">
        <div class="container">
            <h2>Services</h2>

            <div class="flex">
                <div>
                    <div class="fas fa-building"></div>
                    <div class="services-card-right">
                        <h3>Sell Property</h3>
                        <p>Sell your properties at reasonable price.Property Sahi. Milegi Yahin.</p>
                        
                    </div>
                </div>

                <div>
                    <div class="fas fa-rupee-sign"></div>
                    <div class="services-card-right">
                        <h3>Buy Property</h3>
                        <p>Buy property at best price.Property Sahi. Milegi Yahin.</p>
                        
                    </div>
                </div>

                <div>
                    <div class="fas fa-home"></div>
                    <div class="services-card-right">
                        <h3>Rent property </h3>
                        <p>Easily rent your property.Property Sahi. Milegi Yahin.</p>
                        
                    </div>
                </div>



            </div>

        </div>
     </section>

     <section id="testimonials">

        <div class="container">
            <h2>What Our Agents Are Saying</h2>

            <div id="testimonials-slider">
                <div>
                    <blockquote>
                        <p>"Magicbricks made my life easy. It helped me with the search for my first ever investment i.e. 1BHK apartment in Mira Road. Thanks to the team for providing relevant tools like EMI calculator and smart search."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="images/person_7.jpg" alt="Client 7" />
                        <p>Nick Andros</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Magicbricks made my life easy. It helped me with the search for my first ever investment i.e. 1BHK apartment in Mira Road. Thanks to the team for providing relevant tools like EMI calculator and smart search."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="images/person_5.jpg" alt="Client 7" />
                        <p>Larry Underwood</p>
                    </div>
                </div>

                <div>
                    <blockquote>
                        <p>"Magicbricks made my life easy. It helped me with the search for my first ever investment i.e. 1BHK apartment in Mira Road. Thanks to the team for providing relevant tools like EMI calculator and smart search."</p>
                    </blockquote>
                    <div class="testimonials-caption">
                        <img src="images/person_8.jpg" alt="Client 7" />
                        <p>Kaiara Spencer</p>
                    </div>
                </div>

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
                   logo.css('color', '#fff');
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
</form>
</html>