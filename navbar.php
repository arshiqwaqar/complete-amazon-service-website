<link rel="stylesheet" href="nav.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />





<nav class="navbar navbar-expand-lg navbar-light  fixed-top " style="background-color: #0d0c0c63;">
 
<a class="navbar-brand  m-auto cool-link " href="index.php"><span class="h6">ecom</span>Globex<i class="fa fa-globe" aria-hidden="true"></i></span></a><br>
  <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bg-white"></span>
  </button>

  <div class="collapse navbar-collapse col-lg-9 " id="navbarSupportedContent" >
    <ul class="navbar-nav m-auto "  >
      <li class="nav-item active" >
    
        <a class="nav-link cool-link" href="index.php" style="text-transform: uppercase;">Home </a>
      </li>

      <li class="nav-item">
        <a class="nav-link cool-link" href="aboutus.php" style="text-transform: uppercase;">About</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link cool-link" href="contactus.php" style="text-transform: uppercase;">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link cool-link" href="casestudies.php" style="text-transform: uppercase;">Case Studies</a>
      </li>
      <li class="nav-item dropdown cool-link">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase;">
          Services
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown" >
          <a class="dropdown-item cool-link " href="services.php?name='Amazon PPC Management'" >Amazon PPC Services</a>
          <a class="dropdown-item cool-link" href="a+content.php">Amazon A+ Content</a>
          <a class="dropdown-item cool-link" href="account_audit.php">Amazon Account Audit</a>

          <!-- <div class="dropdown-divider cool-link"></div> -->
          <a class="dropdown-item cool-link" href="product_research.php" >Amazon Product Research</a>
          <a class="dropdown-item cool-link " href="patent_research.php">Amazon Patent Research</a>
          <a class="dropdown-item cool-link " href="Reinstatement_service.php">Account Reinstatement Services</a>
          <a class="dropdown-item cool-link " href="services2.php?name='Account Management'">Amazon Account Management Services</a>
          <a class="dropdown-item cool-link " href="services.php?name='Product Listing Optimization'">Product Listing Optimization</a>
          <a class="dropdown-item cool-link " href="services.php?name='Product Listing Optimization'">Amazon Product SOurcing</a>
          <a class="dropdown-item cool-link " href="storefront.php">Product Storefront</a>
          <a class="dropdown-item cool-link " href="social_media.php">Social Media Marketing</a>



        </div>
      </li>
      
      <li class="nav-item text-center" >
        <a class="nav-link  rounded rounded-pill cool-link" href="https://api.whatsapp.com/send?phone=123456789" style="background-color: #0b143f;">+123-456-789</a>
      </li>

    </ul> 
  </div>
</nav>
<script>
  const navEl = document.querySelector('.navbar')

  window.addEventListener('scroll',()=>{
    if(window.scrollY>=200){
      navEl.classList.add('navbar-scrolled')
    }
    else if(window.scrollY<50)
    {
      navEl.classList.remove('navbar-scrolled')
    }
  })
 
</script>
