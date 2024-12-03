<?php include_once('includes/main_header.php') ?>
<!doctype html>
<html class="no-js" lang="en">
   
   <!-- Mirrored from frix.themes95.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 10:33:09 GMT -->
   <head>
   <?php include_once('includes/base.php') ?>
   <title><?= $nom_entreprise ?></title>
   <meta name="description" content="<?= $nom_entreprise ?>, <?= $description ?>">
   <meta name="keywords" content="<?= $nom_entreprise ?>  <?= $description ?>">
   <meta charset="utf-8">
   <meta name="author" content="rix_designs">
   <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
   <!-- favicon -->
   <link rel="shortcut icon" href="<?=$lien_logo . $logo ?>">
   <link rel="apple-touch-icon" href="<?=$lien_logo . $logo ?>">
   <link rel="apple-touch-icon" sizes="72x72" href="<?=$lien_logo . $logo ?>">
   <link rel="apple-touch-icon" sizes="114x114" href="<?=$lien_logo . $logo ?>">
   <!-- bootstrap -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
   <!-- <div class="preloader">
      <img src="images/loader.svg" alt="Loading...">
   </div> -->
   <!-- end of pre loader-->
   <!-- navigation menu -->
 <?php include "includes/header.php" ?>



   <!-- navigation end -->
   <!-- hero img -->
   <section id="home" class="full-screen parallax fixed-parallax zero-padding">
      <img class="parallax-hero-img" src=" <?= !empty($img_banniere) ? $image_banniere . $img_banniere :"images/01_preview.jpg" ?>" alt="" />
      <div class="bg-white display-none opacity-seven xs-display-block"></div>
      <div class="container" style="background-color: rgba(1, 1, 0, 0.5); max-width: 100%;">
         <div class="row">
            <div class="container position-relative full-screen">
               <div class="hero-text-layout">
                  <div class="hero-img-text">
                     <div class="text-hero padding-lr-15 wow fadeInLeft hero-mid-text">
                        <div class="col-md-5 col-9  text-start zero-padding animated fadeInLeft">
                           <h1><?= $titre_banniere1 ?> </h1>
                           <span class="text-white"><?=$description_banniere1 ?></span>
                           <a class="btn btn-black internal-link zero-lr-margin zero-margin-bottom text-uppercase font-weight6 rounded-0"
                              href="#buynow">Commendez Maintenant !</a>
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
   <section id="about" class="zero-padding-bottom pt-120 bg-gray-light" >
      <div class="container">
         <div class="row">
            <div class="col-lg-6 author-text margin-top5 text-center">
               <span class="section-heading  text-black">À PROPOS DE L'AUTEUR</span>
               <!-- <div class="sm-text text-uppercase margin-top-btm-1 letter-space3">Sarah James</div> -->
               <p class="med-text margin-top-btm-10 width9 center-col"> <?= $apropos_de_lentreprise ?></p>
               <img src="images/02_sign.png" alt="" />
               <div class="margin-top5  icons-author text-center">
                  <!-- social media -->
                  <a target="_blank" href="<?= $linkedin ?>">
                     <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                  </a>
                  <a target="_blank" href="<?= $facebook ?>">
                     <i class="fa fa-facebook-square" aria-hidden="true"></i>
                  </a>
                  <a target="_blank" href="<?= $linkedin ?>">
                     <i class="fa fa-twitter-square" aria-hidden="true"></i>
                  </a>
                  <!-- end social media  -->
               </div>
            </div>
            <div class="col-lg-6 author-img border-bottom zero-margin cover-background"
               style="background-image:url('<?=$image_banniere . $img_about ?>');">
            </div>
            <!-- end about  -->
         </div>
      </div>
   </section>
   <!-- end about section -->
   <!-- overview section -->
   <section id="overview" class="xs-section p-120">
      <div class="container">
         <div class="row">
            <!-- section title -->
            <div class="col-md-12 text-center zero-padding">
               <h3 class="section-heading text-black">VUE D'ENSEMBLE</h3>
               <div class="med-text text-uppercase letter-space3"><?= $motivation_titre ?></div>
               <div class="bg-gray-md margin-top-btm-1 line-sep"></div>
               <!-- section title end -->
               <div class="col-12 text-center margin-top-btm-3">
                  <p><?= $motivation_desription ?></p>
               </div>
            </div>
         </div>
         <div class="row">
            <!-- overview box -->
            <div class="col-lg-6 col-md-6 pt-3 margin-top-btm-3 text-center" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
               <i class="icon-desktop icon-sm text-gray"></i>
               <h5 class="text-black margin-top-btm-5 letter-space2"> I. Quelques acteurs du processus de dédouanement</h5>
               <p class="inside-book-text"> La mise en œuvre du commerce international implique l'intervention de nombreux acteurs d'envergure internationale, communautaire et nationale. Ce module aura donc pour objet non pas de présenter tous les intervenants de la chaîne des opérations du commerce international, mais plutôt de ressortir quelques acteurs majeurs influençant de manière significative le déroulement des opérations de dédouanement dans le monde.</p>
            </div>
            <!-- end overview box -->
            <!-- overview box -->
            <div class="col-lg-6 col-md-6 pt-3 margin-top-btm-3 text-center" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
               <i class="icon-heart icon-sm text-gray"></i>
               <h5 class="text-black margin-top-btm-5 letter-space2"> II. Statut douanier des marchandises</h5>
               <p class="inside-book-text">II Quel que soit le pays d'importation ou d'exportation, la gestion d'une opération de dédouanement requiert une bonne maîtrise de certains éléments fondamentaux sur les marchandises tels que :
                  La classification douanière;
                     Les régimes douaniers;
                     La valeur en douane;
                     La taxation douanière en vigueur dans le pays, etc.
                  
                  La mise en application de ces éléments de base permet de gérer les procédures de dédouanement de marchandises de façon efficace et efficiente.</p>
            </div>
            <!-- end overview box -->
            <!-- overview box -->
            <div class="col-lg-6 col-md-6 pt-3 margin-top-btm-3 text-center" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
               <i class="icon-lightbulb icon-sm text-gray"></i>
               <h5 class="text-black margin-top-btm-5 letter-space2">III. Processus de dédouanement des marchandises</h5>
               <p class="inside-book-text">Le processus de dédouanement est un ensemble de procédures ayant pour finalité de permettre à une marchandise de traverser le cordon douanier d'un pays. Ces différentes procédures qui, en fonction des cas,</p>
            </div>
            <!-- end overview box -->
            <!-- overview box -->
            <div class="col-lg-6 col-md-6 pt-3 margin-top-btm-3 text-center" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
               <i class="icon-mobile icon-sm text-gray"></i>
               <h5 class="text-black margin-top-btm-5 letter-space2">IV. Outils de gestion des opérations de dédouanement</h5>
               <p class="inside-book-text">Une bonne gestion des opérations d'import-export en général et du dédouanement en particulier implique la prise en compte de certains aspects à la fois stratégiques et techniques. D'où l'intérêt de ressortir les différents</p>
            </div>
            <!-- end overview box -->
            
            <?php /*<!-- overview box -->
            <div class="col-lg-4 col-md-6 pt-3 margin-top-btm-3 text-center" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
               <i class="icon-pencil icon-sm text-gray"></i>
               <h5 class="text-black margin-top-btm-5 letter-space2">Chapter 5</h5>
               <p class="inside-book-text">Mark vulputate eget arcu. In enim justo rhoncus ut imperdiet an venenatis
                  vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div>
            <!-- end overview box -->
            <!-- overview box -->
            <div class="col-lg-4 col-md-6 pt-3 margin-top-btm-3 text-center" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
               <i class="icon-hotairballoon icon-sm text-gray"></i>
               <h5 class="text-black margin-top-btm-5 letter-space2">Chapter 6</h5>
               <p class="inside-book-text">Mark vulputate eget arcu. In enim justo rhoncus ut imperdiet an venenatis
                  vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div> */?>
            <!-- end overview box -->
         </div>
      </div>
   </section>
   <!-- end overview section -->
   <!-- buynow section -->
   <section id="buynow" class="bg-gray-light1"> 
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-6 xs-margin-btm-10 text-right">
               <img src="<?= $image_banniere . $img_banniere2 ?>" class="img-responsive wow fadeInLeft" alt="" />
            </div>
            <div class="col-lg-6 col-md-8 offset-lg-1">
               <h1 class="font-oswald" style="color:white; margin-top:5%;"><?= $titre_banniere2 ?></h1>
               <h3 class="margin-top5" style="color:white;"> Seulement <span class="price-text"><?= $prix ?> <?= $iso ?></span></h3>
               <a href="<?= $retour_sur_lien ?>/point_vente" target="_blank"
                  class="internal-link btn med-btn price-btn margin-top5 margin-right-zero rounded-0 font-weight6 text-uppercase">Commendez Maintenat</a>
              <?php /* <p class="med-text  margin-top5"><?= $description_banniere2 ?>
               </p> 
              <div class="med-text margin-top5">
                <div id="p1">
                  <div id="p11">
                    <div id="pimg1">
                      <img src="" id="img" alt="image ici">
                    </div> 
                    <div id="ptx"> 
                      <span id="sp1"> VILLE : <span> Douala </span></span>
                      <span id="sp2"> QUARTIER : <span> AKWA </span></span>
                      <span id="sp3"> TÉLÉPHONE : <span> +237 690 90 90 90 </span></span>
                      <button id="b1">CONTACTEZ-MAINTENANT </button> 
                    </div>
                  </div>
                  <div id="p12">
                    <div id="pimg2">
                      <img src="" id="img" alt="image ici">
                    </div> 
                    <div id="ptx"> 
                      <span id="sp1"> VILLE : <span> Douala </span></span>
                      <span id="sp2"> QUARTIER : <span> AKWA </span></span>
                      <span id="sp3"> TÉLÉPHONE : <span> +237 690 90 90 90 </span></span>
                      <button id="b1"> CONTACTEZ-MAINTENANT </button> 
                    </div>
                  </div>
              </div>
                 */ ?>
               <div class=" col-md-12 pt-4">
                        
                  <div class="row">
                     
                     <div class="card img1 col-md-6" >
                       <img src="https://th.bing.com/th/id/OIP.tZogi1VaUsJxy_xbA_ryUQHaEH?rs=1&pid=ImgDetMain" class="card-img-top img2" alt="...">
                       <div class="card-body">
                        <h5 class="card-title">VILLE: <span class="sp1"> Douala</span></h5>
                        <h6 class="card-title">1) <span class="sp1"> Centre keedi logistics (DEIDO)</span></h6>
                        <h6 class="card-title">TÉL: <span class="sp1"> +237 690 90 90 90</span></h6>
                        <h6 class="card-title">TÉL: <span class="sp1"> +237 680 28 40 64</span></h6>
                        <a href="http://tel:237690909090" target="_blank" class="btn btn-primary" rel="noopener noreferrer"> Contacter</a> <i class='fas fa-phone-volume'></i>
                        
                        <!-- <a href="#" class="btn btn-primary sp">CONTACTEZ-MAINTENANT</a> -->
                       </div>
                     </div>
                     
                     <div class="card img1 col-md-6" >
                       <img src="https://th.bing.com/th/id/OIP.tZogi1VaUsJxy_xbA_ryUQHaEH?rs=1&pid=ImgDetMain" class="card-img-top img2" alt="...">
                       <div class="card-body">
                        <h5 class="card-title">VILLE: <span class="sp1"> Douala</span></h5>
                        <h6 class="card-title">2) <span class="sp1"> LIPACAM (AKWA)</span></h6>
                        <h6 class="card-title">TÉL: <span class="sp1"> +237 699 83 97 21</span></h6>
                        <!-- <h6 class="card-title">TÉL: <span class="sp1"> +237 680 28 40 64</span></h6> -->
                        <a href="http://tel:237690909090" style='font-size:15px' target="_blank" class="btn btn-primary" rel="noopener noreferrer"> Contacter</a> <i class='fas fa-phone-volume'></i>
                        
                        <!-- <a href="#" class="btn btn-primary sp">CONTACTEZ-MAINTENANT</a> -->
                       </div>
                     </div>
                  </div>

               </div>
               <?php /*<div class="p1" style="float:left; width:38rem; height:25rem; overflow-y:scroll; margin:5% 0;">
                  <div style="width:37rem; float:left; margin:1% 0;">
                     <div class="card img1" style="width: 18rem; float:left;">
                        <img src="https://th.bing.com/th/id/OIP.tZogi1VaUsJxy_xbA_ryUQHaEH?rs=1&pid=ImgDetMain" class="card-img-top img2" alt="...">
                        <div class="card-body">
                        <h5 class="card-title sp">VILLE: <span class="sp1"> Douala</span></h5>
                        <h5 class="card-title sp">QUARTIER: <span class="sp1"> AKWA</span></h5>
                        <h5 class="card-title sp">TÉLÉPHONE: <span class="sp1"> +237 690 90 90 90</span></h5>
                        <a href="#" class="btn btn-primary sp">CONTACTEZ-MAINTENANT</a>
                        </div>
                     </div>
                           
                     <div class="card " style="width: 18rem; float:right;">
                        <img src="https://th.bing.com/th/id/OIP.tZogi1VaUsJxy_xbA_ryUQHaEH?rs=1&pid=ImgDetMain" class="card-img-top img2" alt="...">
                        <div class="card-body">
                        <h5 class="card-title sp">VILLE: <span class="sp1"> Douala</span></h5>
                        <h5 class="card-title sp">QUARTIER: <span class="sp1"> LOGPOM</span></h5>
                        <h5 class="card-title sp">TÉLÉPHONE: <span class="sp1"> +237 690 90 90 90</span></h5>
                        <a href="#" class="btn btn-primary sp">CONTACTEZ-MAINTENANT</a>
                        </div>
                     </div>
                     
                  </div>

                  <div class="p1" style="width:37rem; float:left; margin:1% 0;">
                     <div class="card" style="width: 18rem; float:left;">
                        <img src="https://th.bing.com/th/id/OIP.tZogi1VaUsJxy_xbA_ryUQHaEH?rs=1&pid=ImgDetMain" class="card-img-top img2" alt="...">
                        <div class="card-body">
                        <h5 class="card-title sp">VILLE: <span class="sp1"> Yaounde</span></h5>
                        <h5 class="card-title sp">QUARTIER: <span class="sp1"> ODZA</span></h5>
                        <h5 class="card-title sp">TÉLÉPHONE: <span class="sp1"> +237 690 90 90 90</span></h5>
                        <a href="#" class="btn btn-primary sp">CONTACTEZ-MAINTENANT</a>
                     </div>
                     </div>
                     <div class="card " style="width: 18rem; float:right;">
                        <img src="https://th.bing.com/th/id/OIP.tZogi1VaUsJxy_xbA_ryUQHaEH?rs=1&pid=ImgDetMain" class="card-img-top img2" alt="...">
                        <div class="card-body">
                        <h5 class="card-title sp">VILLE: <span class="sp1"> Yaounde</span></h5>
                        <h5 class="card-title sp">QUARTIER: <span class="sp1"> MENDONG</span></h5>
                        <h5 class="card-title sp">TÉLÉPHONE: <span class="sp1"> +237 690 90 90 90</span></h5>
                        <a href="#" class="btn btn-primary sp">CONTACTEZ-MAINTENANT</a>
                     </div>
                     </div>
                  </div>

               </div> */?>
            
               <br>
                  <div class="col-lg-5 col-md-4 col-sm-6 xs-margin-btm-10 text-right">
                     <img src="https://th.bing.com/th/id/OIP.Y7xiOOrAdle-vZHAxdDulAHaDa?w=590&h=272&rs=1&pid=ImgDetMain" style="height: 100px;" class="img-responsive wow fadeInLeft" alt="" />
                  </div>
            </div>
         </div>
      </div>
  </section> 
   <!-- end buynow section-->
   <!-- counter section -->
   <section id="counter" class="wow fadeIn p-120">
      <div class="container">
         <div class="row">
            <!-- counter -->
            <div class="col-lg-3 col-md-6 count-settings bottom-margin text-center sm-margin-btm-10">
               <span class="numbers-count counter-timing" data-to="<?= $mention1?>" data-speed="5000"></span>
               <span class="count-caption"><?= $mention_titre1 ?></span>
            </div>
            <!-- end counter -->
            <!-- counter -->
            <div class="col-lg-3 col-md-6 bottom-margin text-center count-settings sm-margin-btm-10">
               <span class="numbers-count counter-timing" data-to="<?= $mention2 ?>" data-speed="5000"></span>
               <span class="count-caption"><?= $mention_titre2 ?></span>
            </div>
            <!-- end counter -->
            <!-- counter -->
            <div class="col-lg-3 col-md-6 bottom-margin-small text-center count-settings xs-margin-btm-10">
               <span class="numbers-count counter-timing" data-to="<?= $mention3 ?>" data-speed="5000"></span>
               <span class="count-caption"><?= $mention_titre3 ?></span>
            </div>
            <!-- end counter -->
            <!-- counter -->
            <div class="col-lg-3 col-md-6 text-center count-settings">
               <span class="numbers-count counter-timing" data-to="<?= $mention4 ?>" data-speed="5000"></span>
               <span class="count-caption"><?= $mention_titre4 ?></span>
            </div>
            <!-- end counter -->
         </div>
      </div>
   </section>
   <!-- end counter section -->

   <!-- review section -->
   <section id="review" class="bg-gray-light1">
      <div class="container">
         <div class="row">
            <!-- section title -->
            <div class="col-12 text-center zero-padding">
               <h3 class="section-heading" style="color:white; margin-top:5%;">Temoignage</h3>
               <div class="med-text text-uppercase letter-space2" style="color:white;">MOTS AIMABLES DES LECTEURS</div>
               <div class="bg-gray-md margin-top-btm-1 line-sep"></div>
            </div>
            <!-- end section title -->
         </div>
         <div class="row margin-top5 wow fadeIn xs-margin-top-10">
            <!-- review -->
            <div class="col-lg-3 col-md-6 review-section text-center xs-margin-btm-10 sm-margin-top-5" style="color:white;">
               <img alt="" src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg?uid=R42397107&ga=GA1.1.1038445777.1714367562&semt=ais_hybrid">
               <p class="center-col" style="color:white;">C'est un ouvrage pratique et pédagogique. Il couvre l'ensemble des aspects essentiels du métier, ce qui en 
                  fait une ressource précieuse pour les transitaires, déclarants, et responsables logistiques. </p>
               <div class="name" style="color:white;">Ricky Harvard</div>
               <div  style="color:white;">Responsables logistiques</div>
            </div>
            <!-- end review class="text-gray" this class come from the last balise-->
            <!-- review -->
            <div class="col-lg-3 col-md-6 review-section text-center xs-margin-btm-10 sm-margin-top-5" style="color:white;">
               <img alt="" src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg?uid=R42397107&ga=GA1.1.1038445777.1714367562&semt=ais_hybrid">
               <p class="center-col" style="color:white;">Ce livre explique de manière simple et détaillée les bases de la douane et du transit.
                   Grâce à ses cas pratiques et son lexique.</p>
               <div class="name" style="color:white;">Sarah Miller</div>
               <div  style="color:white;">Déclarants</div>
            </div>
            <!-- end review -->
            <!-- review -->
            <div class="col-lg-3 col-md-6 review-section text-center xs-margin-btm-10 sm-margin-top-10" style="color:white;">
               <img alt="" src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg?uid=R42397107&ga=GA1.1.1038445777.1714367562&semt=ais_hybrid">
               <p class="center-col" style="color:white;">L'accent mis sur les accords économiques régionaux, comme les APE, 
                  et sur les spécificités du commerce en Afrique, est un véritable atout</p>
               <div class="name " style="color:white;">Biyong</div>
               <div  style="color:white;">transitaire</div>
            </div>
            <!-- end review -->
            <!-- review -->
            <div class="col-lg-3 col-md-6 review-section text-center xs-margin-btm-10 sm-margin-top-10" style="color:white;">
               <img alt="" src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg?uid=R42397107&ga=GA1.1.1038445777.1714367562&semt=ais_hybrid">
               <p class="center-col" style="color:white;">Le livre fournit des techniques concrètes pour gérer les formalités douanières, comprendre les régimes de transit, et optimiser les opérations de dédouanement</p>
               <div class="name " style="color:white;">Eboa</div>
               <div  style="color:white;">transitaire
               <div class="container mt-5 bt2"> 
                  <button id="showFormBtn" class="btn btn-primary">Ajouter un Témoignage</button> 
               </div>
               </div>
            </div>
            <!-- end review -->
         </div>
      </div>
      <div id="overlay" class="overlay"></div>
      <div id="floatingForm"> 
        <form id="myForm"> 
          <div class="form-group"> 
            <label for="name">Nom:</label> 
              <input type="text" class="form-control" id="name" name="name" required> 
          </div>
          <div class="form-group"> 
            <label for="name">Prénom:</label> 
              <input type="text" class="form-control" id="name" name="name" required> 
          </div> 
          <div class="form-group"> 
            <label for="name">Profession:</label> 
              <input type="text" class="form-control" id="name" name="name" required> 
          </div> 
          <div class="form-group"> 
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="4" required>
            </textarea>
          </div> 
          <button type="submit" class="btn btn-success">Enregistrer</button> 
         </form> 
      </div>
   </section>
   <!-- end review section -->

   <!-- buynow section -->
   <section id="buynow" class=" p-120">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-6 xs-margin-btm-10 text-right">
               <img src="<?= $Lien_image_offres . $img_banniere  ?>" class="img-responsive wow fadeInLeft" alt="" />
               <h2 class="section-heading text-black mt-3"><?=$titre_page ?></h2>
            </div>

            <div class="col-lg-5 col-md-4 col-sm-6 xs-margin-btm-10 text-right">
               <img src="<?=  $Lien_image_offres . $img_banniere1  ?>" class="img-responsive wow fadeInLeft" alt="" />
               <h2 class="section-heading text-black mt-3"><?= $titre_page1 ?></h2>
            </div>

         </div>
      </div>
   </section>
   <!-- blog section -->
    <?php if(!empty($blogs)): ?>
      <section id="blog" class="p-120  p-120 bg-gray-light">
         <div class="container">
            <div class="row">
               <!-- section title -->
               <div class="col-md-12 text-center zero-padding">
                  <h3 class="section-heading text-black">Nos dernières articles</h3>
                  <div class="med-text text-uppercase letter-space3">DERNIÈRES MISES À JOUR</div>
                  <div class="bg-gray-md margin-top-btm-1 line-sep"></div>
               </div>
               <!-- end section title -->
            </div>
            <div class="row margin-top-btm-5 zero-margin-bottom">
               <!-- blog item -->
               <?php foreach($blogs as $key=>$value): ?>
                  <div class="col-md-4 col-sm-4 xs-margin-btm-10  xs-text-center">
                     <div class="blog-updates">
                        <div class="img-blog-updates">
                           <a href="<?=$retour_sur_lien.'/'.titre($value->titre).'-'.$value->matricule ?>">
                              <img src="<?=$url_image.$value->photo ?>" alt="">
                           </a>
                        </div>
                        <div class="post-details">
                           <a href="<?=$retour_sur_lien.'/'.titre($value->titre).'-'.$value->matricule ?>" class="post-caption"><?= $value->titre ?></a>
                           <span class="post-author xs-margin-top4">| <strong><?= $value->date ?></strong> | <?= info_admin($value->matricule_admin)->nom ?></span>
                           <p><?= strTextLent(strip_tags($value->content), 50) ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
               <?php /*
               <!-- blog item end -->
               <!-- blog item -->
               <div class="col-md-4 col-sm-4 xs-margin-btm-10 xs-text-center">
                  <div class="blog-updates">
                     <div class="img-blog-updates">
                        <a href="#">
                           <img src="images/10_blog.jpg" alt="">
                        </a>
                     </div>
                     <div class="post-details">
                        <a href="#" class="post-caption">Headline of Post</a>
                        <span class="post-author xs-margin-top4">| <strong>16 March 2016</strong> | Posted by Virads
                           St.</span>
                        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula porttitor eu
                           consequat vitae eleifend ac enim</p>
                     </div>
                  </div>
               </div>
               <!-- blog item end -->
               <!-- blog item -->
               <div class="col-md-4 col-sm-4 xs-margin-btm-10 xs-text-center">
                  <div class="blog-updates">
                     <div class="img-blog-updates">
                        <a href="#">
                           <img src="images/11_blog.jpg" alt="">
                        </a>
                     </div>
                     <div class="post-details">
                        <a href="#" class="post-caption">Headline of Post</a>
                        <span class="post-author xs-margin-top4">| <strong>11 April 2016</strong> | Posted by Stephen
                           Walcott</span>
                        <p>Ramcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus tellus eget condimentum
                           rhoncus sem quam semper laiber. </p>
                     </div>
                  </div>
               </div> */?>
               <!-- blog item end -->
            </div>
            <div class="row">
               <div class="col-md-12 text-center">
                  <a class="btn-center btn btn-black sm-btn" href="#">Voir actualités</a>
               </div>
            </div>
         </div>
      </section>
   <?php endif; ?>
   <!-- blog section end -->
   <!-- contact section -->
   <section id="contact" class="section-padding xs-section p-120 ">
      <div class="container">
         <div class="row">
            <!-- section title -->
            <div class="col-md-12 text-center zero-padding">
               <h3 class="section-heading text-black">contact</h3>
               <div class="bg-gray-md margin-top-btm-1 line-sep"></div>
            </div>
            <!-- end section title -->
         </div>
         <div class="row xs-margin-top4">
            <div class="col-md-9 text-center center-col ">
               <div class="col-md-12 col-sm-12 margin-top-btm-5 text-center">
                  <i class="icon-md text-black icon-map-pin"></i>
                  <h5 class="text-gray margin-top-btm-1 zero-margin-bottom"><?= $region.' , '. $ville.' , Cameroun' ?></h5>
               </div>
            </div>
         </div>
         <div class="row">

            <div class="col-lg-4 margin-top5 xs-text-center sm-text-center">
               <h3 class="font-weight6 xs-margin-top-10">ENGAGEMENTS EN Pratique de la Douane et du Transit</h3>
               <p class="text-gray margin-top5"><?= $description ?></p>
            </div>
            <div class="offset-lg-2 col-lg-6 col-12 margin-top5">
               <form id="contactusform" action="javascript:void(0)" method="post" action="mailer.php">
                  <div id="alert" class="zero-lr-margin"></div>
                  <input name="name" type="text" placeholder="votre nom" />
                  <input name="email" type="email" placeholder="Enter Email" />
                  <input type="text" placeholder="Entrer le numero Whatsapp" id="tel" name="tel" required>
                  <textarea placeholder="Write your Message"  name="message"></textarea>
                  <button id="contact-us-btn" type="submit"
                     class="contact-btn btn sm-btn button xs-margin-btm-5 text-uppercase">Envoyer le 
                     message</button>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- contact us section end -->
   <!-- footer -->
  <?php include "includes/footer.php" ?>
   <!-- footer end -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> 
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
   <script> document.getElementById('showFormBtn').addEventListener('click', function() { 
    document.getElementById('floatingForm').style.display = 'block'; 
    document.getElementById('overlay').style.display = 'block'; }); 
    document.getElementById('overlay').addEventListener('click', function() { 
    document.getElementById('floatingForm').style.display = 'none'; 
    document.getElementById('overlay').style.display = 'none'; }); 
    document.getElementById('myForm').addEventListener('submit', function(event) { 
    event.preventDefault(); 
    // Empêche l'envoi réel du formulaire 
    alert('Formulaire enregistré avec succès!'); 
    document.getElementById('floatingForm').style.display = 'none'; 
    document.getElementById('overlay').style.display = 'none'; }); 
    </script>
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