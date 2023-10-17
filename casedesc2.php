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


$id=$_GET['id'];
$query="SELECT * FROM `case_studies` WHERE  id = $id";
$result=mysqli_query($con,$query);

while($data=mysqli_fetch_assoc($result)){


?>
<div class="container-fluid " >
    

<div class="container-fluid col-md-12 col-sm-12" style="height: 700px;width: auto;background-color: #000;position:relative;">
<img src="images/<?=$data['client-img']?>" height="100%" width="100%"  style="opacity: 0.2;position: absolute;object-fit: contain;">
<div class="row  m-auto" style="position: absolute;color: white;width: 100%;top: 40%;">
    <div class="col-sm-8 col-md-12 text-center ">

        <h1 style="letter-spacing: 2px;text-transform: uppercase;" class="" >Case Study <span style="text-transform: uppercase;">House Day</span></h1>

        <div class="col-sm-8 col-md-12 text-center ">
        
            <br><h5 style="letter-spacing: 4px;color: #285f79;font-size: 15px;">DELIVERING OUTSTANDING RESULTS FOR OUR CLIENTS</h5><hr style=" border: 3px solid ; width: 100%; float: left;" class="bg-info border-info">
              
        
        </div>
    </div>
</div>


</div>
</div>
        <div class="container-fluid" style="background-color: black;">
            <div class="row ">
                <p class="h1 text-center mx-auto mt-4 text-white">Results</p>
            </div>
            <div class="row">

                <p class="mx-auto text-white mx-auto text-center">Overall Wins from 2020 - 2022</p>
            </div>
            <div class="container ">

                <div class="row  mx-auto">
                    <div class=" col-12 col-lg-2 text-center">
                            <i class="fa fa-medal  " style="font-size: 50px;color: #008080;"></i>
                            <h1 class="font-weight-bold text-white">118+</h1>
                            <p class="text-white">Ad Impression</p>
                        </div>
                        <div class=" col-12 col-lg-2 text-center">
                            <i class="fa fa-medal  " style="font-size: 50px;color: #008080;"></i>
                            <h1 class="font-weight-bold text-white">536%</h1>
                            <p class="h4"><span><img src="images/amazon-logo.png" height="20px" width="60px" alt="" ></span> ads</p>
                            <p class="text-white">Attributed Sales</p>

                        </div>
                        <div class=" col-12 col-lg-2 text-center ">
                            <i class="fa fa-medal  " style="font-size: 50px;color: #008080;"></i>
                            <h1 class="font-weight-bold text-white">+87%</h1>
                            <img src="images/amazon-logo.png" height="20px" width="60px" alt=""  >

                            <p class="text-white" class="">in RoAs</p>
                        </div>
                        <div class=" col-12 col-lg-2 text-center">
                            <i class="fa fa-medal  " style="font-size: 50px;color: #008080;"></i>
                            <h1 class="font-weight-bold text-white">+148%</h1>
                            <img src="images/shopify-logo.png" height="20px" width="60px" alt=""  >

                            <p class="text-white">Shopify CRT</p>
                        </div>
                        <div class=" col-12 col-lg-2 text-center">
                            <i class="fa fa-medal  " style="font-size: 50px;color: #008080;"></i>
                            <h1 class="font-weight-bold text-white">+87%</h1>
                            <img src="images/walmart-logo.png" height="20px" width="60px" alt=""  >

                            <p class="text-white">Ad Attributed Sale</p>
                        </div>
                        <div class=" col-12 col-lg-2 text-center">
                            <i class="fa fa-medal  " style="font-size: 50px;color: #008080;"></i>
                            <h1 class="font-weight-bold text-white">+87%</h1>
                            <img src="images/walmart-logo.png" height="20px" width="60px" alt=""  >

                            <p class="text-white">Impressions</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid mb-4" >
                <div class="row mb-4">
                    <p class="mx-auto h1 font-weight-bold mt-4 mb-5 text-center">Process</p>
                </div>
                <div class="container ">

                    <div class="row mx-auto">
                        <div class="col-12 col-lg-1"></div>
                        <div class="col-12 col-lg-2 text-center">
                            <i class="fa fa-star  " aria-hidden="true" style="font-size: 50px;"></i>
                            <p class="text-uppercase h5">Discovery</p>
                        </div>
                        <div class="col-12 col-lg-1 ">
                            <i class="fa fa-angle-right " style="font-size: 40px;font-weight: 600;" aria-hidden="true"></i>
                            
                        </div>
                        <div class="col-12 col-lg-2 text-center">
                            <i class="fa fa-list " aria-hidden="true" style="font-size: 50px;"></i>
                            <p class="text-uppercase h5">Pain Points</p>
                        </div>
                        <div class="col-12 col-lg-1 text-left">
                            <i class="fa fa-angle-right " style="font-size: 40px;font-weight: 600;" aria-hidden="true"></i>
                            
                        </div>
                        <div class="col-12 col-lg-2 text-center">
                            <i class="fa fa-search " aria-hidden="true" style="font-size: 50px;"></i>
                            <p class="text-uppercase h5">Research</p>
                        </div>
                        <div class="col-12 col-lg-1 text-left">
                            <i class="fa fa-angle-right " style="font-size: 40px;font-weight: 600;" aria-hidden="true"></i>
                            
                        </div>
                        <div class="col-12 col-lg-2 text-center text-lg-left">
                            <i class="fas fa-chart-bar    " style="font-size: 50px;"></i>
                            <p class="text-uppercase h5">Results</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        

            <div class="container-fluid" style="background-color: #f7f7f7;">
                <div class="row">
                    <div class="col-12 col-lg-6 " >
                        <img src="images/houseday1.png" height="auto" width="100%" class="row_1" style="animation-delay: 1s;" alt="">
                    </div>
                    <div class="col-12 col-lg-6 py-5" >
                        <p class="font-weight-bold col-12 col-lg-8 text-lg-left text-center row_2"style="animation-delay: 1s;">Making a good thing even better</p>
                        <h1 class="col-12 col-lg-8 text-lg-left text-center font-weight-bold row_3" style="animation-delay: 1s;">Background</h1>
                        <div class="col-12 col-lg-10 text-lg-left text-center " style="line-height: 1.8em;font-weight: 100;animation-delay: 1s;">

                            <p class="row_4"><?=$data['background']?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-12 col-lg-6 py-5" >
                        <p class="font-weight-bold col-12 col-lg-8 text-lg-left text-center row_5"style="animation-delay: 1s;">Bogged Down In the Retail Media Stew</p>
                        <h1 class="col-12 col-lg-8 text-lg-left text-center font-weight-bold row_6" style="animation-delay: 1s;">The Challenges</h1>
                        <div class="col-12 col-lg-10 text-lg-left text-center " style="line-height: 1.8em;font-weight: 100;animation-delay: 1s;">

                            <p class="row_7"><?=$data['challenges']?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 " >
                        <img src="images/houseday1.png" height="auto" width="100%" class="row_8 " style="animation-delay: 1s;" alt="">
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-6 " >
                        <img src="images/houseday3.png" height="auto" width="100%" class="row_9 " style="animation-delay: 1s;" alt="">
                    </div>
                    <div class="col-12 col-lg-6 py-5" >
                        <p class="font-weight-bold col-12 col-lg-8 text-lg-left text-center row_10"style="animation-delay: 1s;">Making a good thing even better</p>
                        <h1 class="col-12 col-lg-8 text-lg-left text-center font-weight-bold row_11" style="animation-delay: 1s;">Success Story</h1>
                        <div class="col-12 col-lg-10 text-lg-left text-center " style="line-height: 1.8em;font-weight: 100;animation-delay: 1s;">

                            <p class="row_12"><?=$data['success-story']?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-12 col-lg-6 py-5" >
                        <p class="font-weight-bold col-12 col-lg-8 text-lg-left text-center row_13"style="animation-delay: 1s;">Bogged Down In the Retail Media Stew</p>
                        <h1 class="col-12 col-lg-8 text-lg-left text-center font-weight-bold row_14" style="animation-delay: 1s;">Strtegies</h1>
                        <div class="col-12 col-lg-10 text-lg-left text-center " style="line-height: 1.8em;font-weight: 100;animation-delay: 1s;">

                            <p class="row_15"><?=$data['strategies']?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 " >
                        <img src="images/houseday1.png" height="auto" width="100%" class="row_16 " style="animation-delay: 1s;" alt="">
                    </div>
                </div>

            </div>


            <?php
}
            include("footer.php");
            
            ?>

</body>
</html>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <script src="https://use.fontawesome.com/1744f3f671.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script>
       
  const add_class1 = document.querySelector('.row_1')
  const add_class2 = document.querySelector('.row_2')
  const add_class3 = document.querySelector('.row_3')
  const add_class4 = document.querySelector('.row_4')


  window.addEventListener('scroll',()=>{
    if(window.scrollY>=900){
      add_class1.classList.add('animated')
      add_class1.classList.add('bounceInLeft')
      add_class2.classList.add('animated')
    add_class2.classList.add('bounceInRight')
    add_class3.classList.add('animated')
    add_class3.classList.add('bounceInRight')
    add_class4.classList.add('animated')
    add_class4.classList.add('bounceInRight')

      
    }
    
  })
  const add_class5 = document.querySelector('.row_5')
  const add_class6 = document.querySelector('.row_6')
  const add_class7 = document.querySelector('.row_7')
  const add_class8 = document.querySelector('.row_8')
  window.addEventListener('scroll',()=>{
    if(window.scrollY>=1500){
      add_class5.classList.add('animated')
      add_class5.classList.add('bounceInLeft')
      add_class6.classList.add('animated')
    add_class6.classList.add('bounceInLeft')
    add_class7.classList.add('animated')
    add_class7.classList.add('bounceInLeft')
    add_class8.classList.add('animated')
    add_class8.classList.add('bounceInRight')

      
    }
    
  })
  
  const add_class9 = document.querySelector('.row_9')
  const add_class10 = document.querySelector('.row_10')
  const add_class11 = document.querySelector('.row_11')
  const add_class12 = document.querySelector('.row_12')
  window.addEventListener('scroll',()=>{
    if(window.scrollY>=2000){
      add_class9.classList.add('animated')
      add_class9.classList.add('bounceInLeft')
      add_class10.classList.add('animated')
    add_class10.classList.add('bounceInRight')
    add_class11.classList.add('animated')
    add_class11.classList.add('bounceInRight')
    add_class12.classList.add('animated')
    add_class12.classList.add('bounceInRight')

      
    }
    
  })
  const add_class13 = document.querySelector('.row_13')
  const add_class14 = document.querySelector('.row_14')
  const add_class15 = document.querySelector('.row_15')
  const add_class16 = document.querySelector('.row_16')
  window.addEventListener('scroll',()=>{
    if(window.scrollY>=2500){
      add_class13.classList.add('animated')
      add_class13.classList.add('bounceInLeft')
      add_class14.classList.add('animated')
    add_class14.classList.add('bounceInLeft')
    add_class15.classList.add('animated')
    add_class15.classList.add('bounceInLeft')
    add_class16.classList.add('animated')
    add_class16.classList.add('bounceInRight')

      
    }
    
  })
  
</script>