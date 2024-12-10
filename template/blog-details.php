<?php include_once('includes/main_header.php') ?>
<!doctype html>
<html class="no-js" lang="en">
  

   
   <!-- Mirrored from frix.themes95.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 10:33:09 GMT -->
   <head>
   <?php //include_once('includes/base.php')
   
    ?>
   <base href="../">
   <title><?= $nom_entreprise ?> | <?= $blogs[0]->titre ?></title>
   <meta name="description" content="<?= $nom_entreprise ?> | <?= $blogs[0]->titre ?>">
   <meta name="keywords" content="<?= $nom_entreprise ?> | <?= $blogs[0]->titre ?> | <?= $mot_cles ?>" >
   <meta charset="utf-8">
   <meta name="author" content="rix_designs">
   <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
   <!-- favicon -->
   <link rel="shortcut icon" href="images/favicon.png">
   <link rel="apple-touch-icon" href="<?= $chin_logo . $logo ?>">
   <link rel="apple-touch-icon" sizes="72x72" href="<?= $chin_logo . $logo ?>">
   <link rel="apple-touch-icon" sizes="114x114" href="<?= $chin_logo . $logo ?>">
   <!-- bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- animation -->
   <link rel="stylesheet" href="css/animate.css" />
   <!-- icons -->
   <link rel="stylesheet" href="css/et-line-icons.css" />
   <link rel="stylesheet" href="css/font-awesome.min.css" />
   <!-- custom stylesheet -->
   <link rel="stylesheet" href="css/style.css" />
   <!-- responsive -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!--[if IE]>
            <link rel="stylesheet" href="css/style-ie.css" />
        <![endif]-->
   <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
</head>

<body>
   <!--pre loader-->
   <div class="preloader">
      <img src="images/loader.svg" alt="Loading...">
   </div>
   <!-- end of pre loader-->
   <!-- navigation menu -->
 <?php include "includes/header.php" ?>



   <!-- navigation end -->
   <!-- hero img -->
   <section id="home" class="full-screen parallax fixed-parallax zero-padding">
      <img class="parallax-hero-img" src="<?= !empty($blogs[0]->photo) ? $chemin . $blogs[0]->photo :"images/01_preview.jpg" ?>" alt="" />
      <div class="bg-white display-none opacity-seven xs-display-block"></div>
      <div class="container" style="background-color: rgba(1, 1, 0, 0.5); max-width: 100%;">
         <div class="row" >
           <div class="container position-relative full-screen">
               <div class="hero-text-layout">
                  <div class="hero-img-text" >
                     <div class="text-hero padding-lr-15 wow fadeInLeft hero-mid-text">
                        <div class="col-md-5 col-12  text-start zero-padding animated fadeInLeft">
                           <h1><?= $blogs[0]->titre ?> </h1>
                        </div>
                     </div> 
                  </div> 
               </div>
            </div> 
         </div> 
      </div> 
   </section>
   <!-- hero img end -->
   <!-- about section -->
   <section id="about" class="zero-padding-bottom  bg-gray-light" >
      <div class="container">
         <div class="row ">
            
            <div class="col-lg-12 author-text ">
               <!-- <div class="sm-text text-uppercase margin-top-btm-1 letter-space3">Sarah James</div> -->
               <p class="med-text margin-top-btm-10 width-9 "> <?= @$blogs[0]->content ?></p>
               
                  <!-- end social media  -->
               <?php if(!empty($blogs[0]->lien_service)): ?>
                  <div class="submit-button sc-primary-btn">
                     <h4><a href="<?= @$blogs[0]->lien_service ?>" target="_blank" rel="noopener noreferrer" style="color:antiquewhite"><?= @$blogs[0]->call_action ?></a></h4>
                  </div> 
               <?php endif ?>
               </div>
            </div>
            <!-- end about  -->
         </div>
      </div>
   </section>
   
   <!-- footer -->
  <?php include "includes/footer.php" ?>
   <!-- footer end -->

   <!-- javaScripts -->
   <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
   <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
   <script type="text/javascript" src="js/smooth-scroll.js"></script>
   <script type="text/javascript" src="js/jquery.appear.js"></script>
   <!-- parallax -->
   <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
   <!-- animation -->
   <script type="text/javascript" src="js/wow.min.js"></script>
   <!-- counter -->
   <script type="text/javascript" src="js/jquery.countTo.js"></script>
   <!-- custom -->
   <script type="text/javascript" src="js/main.js"></script>
</body>


<!-- Mirrored from frix.themes95.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 10:33:22 GMT -->
</html>