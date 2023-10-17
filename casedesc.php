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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >

</head>
<body class="bg-light">

<?php
require("config.php");
include("navbar.php");


$id=$_GET['id'];
$query="SELECT * FROM `case_studies` WHERE  id = $id";
$result=mysqli_query($con,$query);

while($data=mysqli_fetch_assoc($result)){


?>


<div class="container-fluid col-md-12 col-sm-12" style="height: 700px;width: auto;background-color: #000;position:relative;">
<img src="images/<?=$data['client-img']?>" height="100%" width="100%"  style="opacity: 0.2;position: absolute;object-fit: contain;">
<div class="row  m-auto" style="position: absolute;color: white;width: 100%;top: 40%;">
    <div class="col-sm-8 col-md-12 text-center ">

        <h1 style="letter-spacing: 2px;text-transform: uppercase;" class="" >Case Study <span style="text-transform: uppercase;"><?=$data['client-name']?></span></h1>

        <div class="col-sm-8 col-md-12 text-center ">
        
            <br><h5 style="letter-spacing: 4px;color: #285f79;font-size: 15px;">DELIVERING OUTSTANDING RESULTS FOR OUR CLIENTS</h5><hr style=" border: 3px solid ; width: 100%; float: left;" class="bg-info border-info">
              
        
        </div>
    </div>
</div>


</div>
<div style="background-color: #eee;"></div>


<div style="background-color: #eee;"><div class="container py-5"><div class="row"><div class="col-12 col-sm-6 col-lg-3 my-auto"><h1>Client Statistics</h1><hr style=" border: 3px solid ; width: 90px; float: left;" class="bg-info border-info"></div><div class="col-12 col-sm-6 col-lg-9"><div class="row"><div class="col-lg-4"><div class="single-counter text-center my-3"><div class="d-inline-block py-3 px-3" style=" border: 2px solid #e54ed0;"><h1>$1.5M+</h1><span class="text-dark">Total Ad Spend Managed</span></div></div></div><div class="col-lg-4"><div class="single-counter text-center my-3"><div class="d-inline-block py-3 px-3" style=" border: 2px solid #e54ed0;"><h1>250+</h1><span class="text-dark">Client Accounts Handled</span></div></div></div><div class="col-lg-4"><div class="single-counter text-center my-3"><div style=" border: 2px solid #e54ed0;" class="d-inline-block py-3 px-3"><h1><span class="text-dark">40</span>% </h1><span class="text-dark">TACOS Reduction Achieved</span></div></div></div></div></div></div></div></div>
<div class="container">
    <div class="row ">
        <div class="col-lg-6 p-2 col-sm-4" >
        <img src="images/<?=$data['client-logo']?>" alt="" height="auto" width="100%">

        </div>
        <div class="col-lg-6 p-2 col-sm-4" >
            <img src="images/<?=$data['client-img']?>" alt="" height="auto" width="100%">
        </div>

    </div>
</div>
<div class="container mt-5">
    <div class="row ">
        <div class="col-md-3 col-sm-6 border-right border-primary ">
            <div class="row ">
            <div class="col-lg-4 d-flex mt-4">
                <img src="images/category.png" alt="" height="50px" width="auto" class="align">
                
                <h5 class="ml-4">Category: <span class="text-primary text-left">Sports|fitness</span></h5> 
            </div>

        </div>
    
    </div>
    
        <div class="col-md-3 col-sm-6 border-right border-primary ">
            <div class="row ">
            <div class="col-lg-12 d-flex mt-4">
                <img src="images/marketmanaged.png" alt="" height="50px" width="auto">
                <h5 class="ml-4">Markets Managed: <span class="text-primary">UK</span></h5>
            </div>
          

        </div></div>
        <div class="col-md-3 col-sm-6 border-right border-primary">
            <div class="row ">
            <div class="col-lg-12 d-flex mt-4">
                <img src="images/stats.png" alt="" height="50px" width="auto" class="align">
                
                <h5 class="ml-4">Monthly Sales: <span class="text-primary text-left">$100-150k</span></h5> 
            </div>

        </div>
    
    </div>
    <div class="col-md-3 col-sm-6 ">
            <div class="row ">
            <div class="col-lg-4 d-flex mt-4">
                <img src="images/asins.png" alt="" height="50px" width="auto" class="align">
                
                <h5 class="ml-4">Asins: <span class="text-primary text-left">12</span></h5> 
            </div>

        </div>
    
    </div>


    </div>
</div>
 <div class="container mt-5">
    
    <h1 class="text-left text-dark col-md-12 " style="font-weight: 700;font-family:oswald"><span style="color: steelblue;">Success Story:</span> <?=$data['success-story']?>
</h1>

 </div>

 <div class="container mt-5">
     <h3>
 <i class="fa-solid fa-angles-right" style="color: #598ee8;"></i> <?=$data['client-name']?> <span class="text-info">Background:</span> 

     </h3>
     <p class="text-md-justify ml-md-5 text-sm-justify "> <?=$data['background']?></p>
    <div class="row">
        <div class="col-md-6 mt-5">
            
            <h3>
        <i class="fa-solid fa-angles-right" style="color: #598ee8;"></i> The <span class="text-info">Challenges:</span> 

            </h3>
            <p class="text-justify ml-md-5"><?=$data['challenges']?>
</p>


        </div>
        <div class="col-md-6 col-sm-12">
            <img src="images/<?=$data['client-logo']?>" alt="" height="auto" width="100%">
        </div>

    </div>
    <h3>
        <i class="fa-solid fa-angles-right" style="color: #598ee8;"></i>Strategies <span class="text-info">Implemented:</span> 

            </h3>
    <p class="text-justify ml-md-5"><?=$data['strategies']?>

</p>
<ul style="list-style: square;" >
             <div class=" row  ">

                 <li style="font-size: 18px;font-weight: 500;" class="mt-3 col-sm-12 col-md-6  "> Listing <span class="text-info">Optimization & SEO</span> </li>
                 <li style="font-size: 18px;font-weight: 500;" class="mt-3 col-sm-12 col-md-6 "> Amazon <span class="text-info"> PPC Management</span> </li>
             </div>
             <div class=" row ">

        <li style="font-size: 18px;font-weight: 500;" class="mt-3 col-sm-12 col-md-6  "> Listing <span class="text-info">Optimization & SEO</span> </li>
        <li style="font-size: 18px;font-weight: 500;" class="mt-3 col-sm-12 col-md-6 "> Amazon <span class="text-info"> PPC Management</span> </li>
</div>
                
            </ul>
            <hr class="border border-dark ">
 </div>
 <div class="container ">
 <h3>
        <i class="fa-solid fa-angles-right " style="color: #598ee8;"></i>The <span class="text-info ">Results:</span> 

            </h3>
    <!-- <h1 class="col-md-6" style="font-weight: 650;letter-spacing: 1.5px;">Tunning into the <span style="color: steelblue;">Right Frequency</span> </h1> -->
    <p class="text-justify ml-md-5">
    <?=$data['result']?>

</p>
 </div>



 <div class="container text-center mt-5">
    <h1>See What Client Has Said</h1>
    <div class="user   col-md-2 col-sm-2 m-auto object-fit p-3">
     <img src="images/user1.jpg" height="100px" width="100px" style="border-radius: 50%;">
    </div>
    <h3>Erika Smith</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet saepe autem dolor dignissimos veritatis blanditiis modi labore ex vitae adipisci in laborum, recusandae dolorem tempore suscipit nemo! Laborum, </p>
 </div>

<div class="container-fluid mt-5 mb-5">
    <img src="images/casestudy.PNG" height="auto" width="100%">
</div>
 <?php

}
?>


<!-- How we Help You to build Your Bussines -->


<?php
include("footer.php");
?>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
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
    });
  </script>
