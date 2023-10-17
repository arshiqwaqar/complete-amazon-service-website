<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Globex Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Pathway+Extreme:ital,wght@1,200&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="casestudies.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" ></script>
</head>
<body >

<?php
require("config.php");
include("navbar.php");
?>







<!-- Carousel wrapper -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner bg-dark">
    <div class="carousel-item active " >
      <video  autoplay loop muted style="height: auto;width: 100%;">
        <source src="images/bannervideo1.mp4" type="video/mp4"  >
      </video>
      <div class="carousel-caption  ">
        <h5 class="text-white animated bounceInRight" style="animation-delay: 1s;">Amazon PPC Management</h5>
        <p class="animated bounceInLeft" style="animation-delay: 1.5s;font-family: Inter;width: 100%;">"Experience E-commerce Mastery  Trust Our Services to Drive Sales, Enhance Customer Experience and Expand Your Reach."
</p>
        <p><a href="services.php?name='PPC Management'" class="animated bounceInLeft" style="animation-delay: 2.5s; ">More Info</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source src="images/bannervideo2.mp4" type="video/mp4">
      </video>
      <div class="carousel-caption ">
        <h5 class="text-white animated slideInDown" style="animation-delay: 1s;">
Unleash the Power of Your Brand,
 Be Bold
 Be Unforgettable</h5>
        <p class="animated fadeInUp" style="animation-delay: 1.5s;font-family: Inter;width: 100%;">Embark on your e-commerce adventure with a partner who understands your unique needs and goals, our services will fast-track your path to success.
</p>
        <p><a href="services.php?name='SEO Service'" class="animated zoomIn" style="animation-delay: 2s;">More Info</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source src="images/bannervideo3.mp4" type="video/mp4">
      </video>
      <div class="carousel-caption ">
        <h5 class="text-white animated zoomIn" style="animation-delay: 1s;">Help To Build Brands</h5>
        <p class="animated fadeInRight" style="animation-delay: 1.5s;font-family: Inter;width: 100%;">"Don't Just Survive, Thrive: Our Services Will Skyrocket Your E-commerce Business Ahead of the Competition."</p>
        <p><a href="services.php?name='Branding'" class="animated zoomIn" style="animation-delay: 2s;">More Info</a></p>
      </div>
    </div>
  </div>
  <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    
  </a> -->
</div>
<div class="container mt-3">
<!-- <h3 class="text-center text-info font-weight-bold" style="font-family: Georgia, 'Times New Roman', Times, serif;">The Vision Of Our company</h3> -->
<p class="process_text text-center">Our Vision</p>
<p class="text-center font-weight-bold" style="font-family: Arial, Helvetica, sans-serif;opacity: 0.4;letter-spacing: 2px;margin-top: 2px;">Ecomglobex</p>

</div>
<?php
include("contact_form.php");
?>
<div class="container">

  <div ><div class="container py-5"><div class="row"><div class="col-12 col-sm-6 col-lg-3 my-auto"><h1 style="font-size: 40px;">Client Statistics</h1><hr style=" border: 3px solid ; width: 90px; float: left;" class="bg-info border-info"></div><div class="col-12 col-sm-6 col-lg-9"><div class="row"><div class="col-lg-4"><div class="single-counter text-center my-3"><div class="d-inline-block py-3 px-3" style=" border: 2px solid #e54ed0;"><h1 id="counter" style="font-size: 40px;">M+</h1><span class="text-dark">Total Ad Spend Managed</span></div></div></div><div class="col-lg-4"><div class="single-counter text-center my-3"><div class="d-inline-block py-3 px-3" style=" border: 2px solid #e54ed0;"><h1 style="font-size: 40px;" id="counter2"></h1><span class="text-dark">Client Accounts Handled</span></div></div></div><div class="col-lg-4"><div class="single-counter text-center my-3"><div style=" border: 2px solid #e54ed0;" class="d-inline-block py-3 px-3"><h1 style="font-size: 40px;"><span class="text-dark" id="counter3" ></span>% </h1><span class="text-dark">TACOS Reduction Achieved</span></div></div></div></div></div></div></div></div>
</div>




<!-- Our Services Section -->

            
          
<div class="row">
  <div class="col-lg-10 mx-auto">
    <div class="section-header text-center">
      <p class="text-uppercase process_text">Our Services</p>
      <h4  class="text-info process_text1">How Our Services Help You Grow!</h4>
      <p  class="service_text1" >ECOMGlobex is a full-service Amazon marketing agency, Partnering with us means gaining a strategic advantage in the Amazon marketplace. Our services go beyond simple optimization; we offer a holistic approach to your Amazon business. From comprehensive listing optimization to strategic advertising campaigns, we will enhance your brand visibility and position you for success.</p>
      <!-- <hr class="border border-info  mx-auto ">   -->
    </div>
    
  </div>
</div>
<div class="container-fluid">

    
<div class="row text-center justify-content-center   section-row">
  <div class="col-sm-12 col-lg-6  d-md-flex mx-3 service-section-body" >
  <a href="#" class="service-section mx-auto my-5 ">
  
    <img src="images/serviceimg.PNG" alt="" class="service-img mx-4 text-center" >
    <p class="text-uppercase mt-3 service-name " >Amazon PPC Service</p>
    <h5 class="service-button text-center  font-weight-normal">Learn More!</h5> 
    
  </a>
  <div class="service-ul  ">
  <ul >
  <li>Keyword research</li>
  <li>Campaign setup</li>
  <li>Ad creation and optimization</li>
  <li>Bid management</li>
  <li>Performance monitoring</li>
  <li>Budget management</li>
  <li>A/B testing</li>
  <li>Reporting and analysis</li>
  <li>Ongoing optimization</li>
  <li>Expert guidance</li>
  </ul>
  </div>

</div>


<div class="col  d-md-flex service-section-body " >
  <a href="#" class="service-section mx-auto my-5 ">
  
    <img src="images/serviceimg.PNG" alt="" class="service-img mx-4">
    <p class="text-uppercase mt-3 service-name " >Amazon A+ Content</p>
    <h5 class="service-button text-center  font-weight-normal">Learn More!</h5> 
    
  </a>
  <div class="service-ul ">
  <ul >
  <li>Keyword research</li>
      <li>Campaign setup</li>
      <li>Ad creation and optimization</li>
      <li>Bid management</li>
      <li>Performance monitoring</li>
      <li>Budget management</li>
      <li>A/B testing</li>
      <li>Reporting and analysis</li>
      <li>Ongoing optimization</li>
      <li>Expert guidance</li>
    </ul>
  </ul>
  </div>

</div>


</div>
<!-- <div class="row ">
  <div class="col-lg-11 text-center">
  <img src="images/content-removebg-preview.png" class="mx-auto" height="80px" width="80px" style="position: absolute;" alt="">
  </div>
</div> -->
<!-- second service -->
<div class="row text-center justify-content-center mt-4 mb-4  section-row">
  <div class="col-sm-12 col-lg-6 d-md-flex mx-3 service-section-body" >
  <a href="#" class="service-section mx-auto my-5 ">
  
    <img src="images/serviceimg.PNG" alt="" class="service-img mx-4 text-center" >
    <p class="text-uppercase mt-3 service-name " >Amazon Storefront</p>
    <h5 class="service-button text-center  font-weight-normal">Learn More!</h5> 
    
  </a>
  <div class="service-ul  ">
  <ul >
  <li>Keyword research</li>
  <li>Campaign setup</li>
  <li>Ad Optimization</li>
  <li>Bid management</li>
  <li>Performance monitoring</li>
  <li>Budget management</li>
  <li>A/B testing</li>
  <li>Reporting and analysis</li>
  <li>Ongoing optimization</li>
  <li>Expert guidance</li>
  </ul>
  </div>

</div>


<div class="col  d-md-flex service-section-body " >
  <a href="#" class="service-section mx-auto my-5 ">
  
    <img src="images/serviceimg.PNG" alt="" class="service-img mx-4">
    <p class="text-uppercase mt-3 service-name " >Social Media Marketing</p>
    <h5 class="service-button text-center  font-weight-normal">Learn More!</h5> 
    
  </a>
  <div class="service-ul ">
  <ul >
  <li>Keyword research</li>
  <li>Campaign setup</li>
  <li>Ad creation/optimization</li>
  <li>Bid management</li>
  <li>Performance monitoring</li>
  <li>Budget management</li>
  <li>A/B testing</li>
  <li>Reporting and analysis</li>
  <li>Ongoing optimization</li>
  <li>Expert guidance</li>
  </ul>
  </div>

</div>


</div>
</div>






   
<!-- <div class="container-fluid text-center p-5" style="background-color: #0b143f;">
<p class="text-uppercase text-light process_text" >Our Popular Brands</p>

  <div class="row d-flex">
    <div class="col-md-3 ">
      <img src="images/brand.PNG" alt="" class="w-100 h-100">

    </div>
    <div class="col-md-9 m-auto">
    <div class="brand-slider "style="background-color: #0b143f;">

    <div class="slider-track mt-5">
      <div class="slide">
    
      <div class="item"><img src="images/tiktok.png" height="150px" width="150px" alt=""></div>
    
      </div>
      <div class="slide">
    
    <div class="item"><img src="images/netflix.png" height="150px" width="150px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/google.png" height="150px" width="150px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/netflix.png" height="150px" width="150px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/tiktok.png" height="150px" width="150px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/google.png" height="150px" width="150px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/mercedes.png" height="150px" width="150px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/google.png" height="150px" width="150px" alt=""></div>
  
    </div>
    
    </div>
    

    
  </div>

      <img src="images/brand1.PNG" height="30%" width="30%" >
      <img src="images/brand2.PNG" height="30%" width="30%">
      <img src="images/brand3.PNG" height="30%" width="30%">
    </div>

  </div>


</div> -->
<div class="brand-slider" style="background-color: black;height: 140px;">
<div class="container" >

  <p class="text-uppercase text-light text-center font-weight-bold " style="font-family: Arial, Helvetica, sans-serif;">Our Popular Brands</p>
</div>

    <div class="slider-track ">

      <div class="slide">
    
      <div class="item"><img src="images/netflix.PNG" height="90px" width="90px" alt=""></div>
    
      </div>
      <div class="slide">
    
    <div class="item"><img src="images/tiktok.png" height="90px" width="90px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/netflix.PNG" height="90px" width="90px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/tiktok.png" height="90px" width="90px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/netflix.png" height="90px" width="90px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/tiktok.png" height="90px" width="90px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/netflix.png" height="90px" width="90px" alt=""></div>
  
    </div>
    <div class="slide">
    
    <div class="item"><img src="images/tiktok.png" height="90px" width="90px" alt=""></div>
  
    </div>
    
    </div>
    

    
  </div>

<!-- Our Process -->
<div class="container-fluid mt-4">
  <div class="container ">
  <p class="process_text text-uppercase text-center mt-2 " >Our Process</p>
  <p class="process_text1 col-lg-9 text-center mx-auto" >Our execution done in haste leaves nothing but waste. Therefore we plan it out thoroughly, take it slow in the begining, and strive for impecable results</p>

  </div>
  <img src="images/our_process.jpg" height="auto" width="100%" alt="">
</div>


<!-- Case studies -->
<p class="process_text text-uppercase  text-center p-3" style="line-height: 1.5em;" >Our BRAND'S SUCCESS STORIES</p>
<p style="font-weight: 500;text-align: center;color: #285f79;">Join Our Successful Journey Today</p>
<hr class="border border-info col-8 mx-auto ">

<div class="row">
      <div class="large-12 columns">
        <div class="owl-carousel owl-theme">
        <div class="item">
          <div class=" col-md-12 case_slide" style="position: relative;" >
            <div style="position: relative;" >
            
            

            <p  class="case_name h3 text-white p-4" style="position: absolute; top: 52%;font-family: Arial, Helvetica, sans-serif; color: white;">Best World Led</p>
              <p  class="case_cat h3 text-white p-4 " style="position: absolute; top: 60%;font-family: Arial, Helvetica, sans-serif; color: white;">Electric Appliances</p>
              <a class="btn btn-outline-light col-4 mx-4 text-light" style="position: absolute; top: 77%;font-family: Arial, Helvetica, sans-serif; " href="casedesc2.php">Case Study</a>
              <img src="images/houseday.jpeg" height="400px" width="100%" class="img_case ">
            </div>
          
          </div>
          </div>
          <div class="item">
          <div class=" col-md-12 case_slide" style="position: relative;" >
            <div style="position: relative;" >
            
            

            <p  class="case_name h3 text-white p-4" style="position: absolute; top: 52%;font-family: Arial, Helvetica, sans-serif; color: white;">Best World Led</p>
              <p  class="case_cat h3 text-white p-4 " style="position: absolute; top: 60%;font-family: Arial, Helvetica, sans-serif; color: white;">Electric Appliances</p>
              <a class="btn btn-outline-light col-4 mx-4 text-light" style="position: absolute; top: 77%;font-family: Arial, Helvetica, sans-serif; " href="casedesc2.php">Case Study</a>
              <img src="images/bestworldled.jpg" height="400px" width="100%" class="img_case ">
            </div>
          
          </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid " style="position: relative;">
      <div class="row mt-5">
        <!-- <img src="images/worldmap.png" height="470px" width="100%" style="position: absolute;opacity: 0.3;" alt=""> -->
        <div class="col-lg-12 text-center">
          <p class="h1 font-weight-bold"><span class="text-warning">Review's</span> Of Our Clients </p>
          
            <p class="process_text1 col-12 col-lg-7 text-center mx-auto">We believe that our clients feedback is the lifeboard of our bussiness. We  understand that every client is unique and their needs are different, which is why we value their feedback and criticism so highly.</p>
        </div>
      </div>

<div class="row justify-content-center">

    <div class="col-10 col-lg-3 text-center mt-2 mb-2 pb-2" style="border-radius: 40px; background-color: #00000099;position: relative;">
      <div >
        <img src="images/user1.jpg" height="80px" width="80px" class="rounded-circle mx-0 mt-2" style="border: 4px solid white;"   alt="">
      </div>
      <div>
        <p class="text-white h5">John Smith</p>
        <p>Client</p>
      </div>
      <hr class="border h4 col-6 mx-auto">
      <div>
      <p class="text-white text-center process_text1 px-3">"I'm extremely impressed with the results delivered by [ECOM GLOBAX]. Their expertise in optimizing product listings and running effective PPC campaigns has significantly boosted my sales. Highly recommended!"</p>
    </div>
    </div>

    <div class="col-10 col-lg-3 offset-md-1 text-center mt-2 mb-2" style="border-radius: 40px; background-color: #00000099;position: relative;">
      <div >
      <img src="images/user1.jpg" height="80px" width="80px" class="rounded-circle mx-0 mt-2" style="border: 4px solid white;"   alt="">

      </div>
      <div>
        <p class="text-white h5">Erik Smith</p>
        <p>Client</p>
      </div>
      <hr class="border h4 col-6 mx-auto">

      <div>
        <p class=" text-white text-center process_text1 px-3">"Thanks to ECOM GLOBAX, my Amazon listings are now optimized and rank higher in search results. Their attention to detail and keyword research have helped me attract more customers and increase sales."</p>
      </div>
    </div>
    <div class="col-10 col-lg-3 offset-md-1 text-center mt-2 mb-2" style="border-radius: 40px; background-color: #00000099;position: relative;">
      <div >
      <img src="images/user1.jpg" height="80px" width="80px" class="rounded-circle mx-0 mt-2" style="border: 4px solid white;"   alt="">

      </div>
      <div>
        <p class="text-white h5">Thomas Miller</p>
        <p>Client</p>
      </div>
      <hr class="border h4 col-6 mx-auto">

      <div>
        <p class="text-white text-center process_text1 px-3">"Choosing ECOM GLOBEX for my Amazon account management was one of the best decisions I made. Their team is highly professional, responsive, and has a deep understanding of the Amazon platform."</p>
      </div>
    </div>
</div>

</div>
    

<!-- <section class="testimonials">      
  
            <div class="swiper mySwiper container-fluid">
           
            <div class="swiper-wrapper ">
                <?php
                $i=0;
                while($i<=10){
                ?>
              <div class="swiper-slide bg-light ">
               <div class="testimonialbox">
                <img src="images/pngwing.com.png" alt="" class="quote">
                <div class="details">
                    <div class="imgbx text-center">
                        <img src="images/user1.jpg" alt="" class=" rounded-circle  mx-auto" >
                        <h3 class="">Someone Famous <br> <span>Creative designer</span></h3>
                    </div>
                    <p > "I'm extremely impressed with the results delivered by ECOM GLOBAX. Their expertise in optimizing product listings and running effective PPC campaigns has significantly boosted my sales. Highly recommended!"</p>
                  </div>
                
               </div>
              </div>
          
              <?php
              $i++;
              }
              ?>
            </div>
            
          </div>
            </section> -->


            
            <!-- <div class="container-fluid text-center d-md-flex" style="background-color: #0b143f;height: 270px;">

            <img src="images/content.PNG" height="auto" width="50%">
            <div class="container ">
              <div class="row d-flex">
              
    <div class="col-10 text-left">
                  <p class="  text-left process_text1 text-white ">WE HELP GROWING,</p>
                  <p class="  text-left process_text1 text-white">COME JOIN US</p>
                  <p class="  text-left process_text1 text-white ">Looking for a fun,collaborative environment where you can grow within a fast-paced ,global team?</p>
                  <a class="btn  col-lg-5 col-sm-5 mb-2 mt-3 " style="border-radius: 50px;font-size: 20px;font-family: Arial, Helvetica, sans-serif;background-color: darkorange;">LET'S DISCUSS</a>
    </div>
</div>

</div>
            </div> -->
    
            



<!-- FOOTER -->
<?php
include("footer.php");
?>
</body>
</html>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 10,
        loop: true,
        autoplay:true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })

    </script>

<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
        
      },
      loop:true,
      autoplay:true,
    });
    // vars
'use strict'
var	testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
		
		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})
	
		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;
			
				touchPosDiff = touchStartPos - touchEndPos;
			
				console.log(touchPosDiff);
				console.log(touchStartPos);	
				console.log(touchEndPos);	

			
				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}
			
		})
}
  </script>
<script>
        let counts = setInterval(updated);
        let upto = 80;

        function updated() {
            let count = document.getElementById("counter");
            count.innerHTML = ++upto+"M+";
            
            if (upto === 250 ) {
                clearInterval(counts);
            }

        }
        
        let count2 =setInterval(runner);
        let finall = 0;
        function runner(){
          let demo = document.getElementById("counter2");
          demo.innerHTML= ++finall+"+";
          if (finall === 250 ) {
                clearInterval(count2);
            }
        }

        let count3 =setInterval(runner1);
        let value = 0;
        function runner1(){
          let demo1 = document.getElementById("counter3");
          demo1.innerHTML= ++value+"";
          if (value === 40 ) {
                clearInterval(count3);
            }
        }
    </script>