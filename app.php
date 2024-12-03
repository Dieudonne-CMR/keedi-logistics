<?php 
// include "includes/main_header/main_header.php" ;  
include "api/cle_api.php";
include "includes/fonctions/fonctions.php";
//======


$url="";

//====== Traitement de url
if(isset($_GET['url'])):
    $url=explode('/',$_GET['url']);
endif;
//====== fin

//--------Route page d'accuil
if(@$url[0]=='home' || @$url[0]==''):
    $services = recup_services();
    $equipe = info_equipe();
    $article = recup_article();
  
    include_once("template/home.php");
endif;
//--------Route page Apropos
if(@$url[0]=='about' ):
    include_once("template/$url[0].php");
endif;

if(@$url[0]=='point_vente' ):
    include_once("template/$url[0].php");
endif;
//------- Route page boutique



//------- Route page blog
/*
if(@$url[0]=='blog'):
    $service11 = recup_services();
    $article1 = $obj_tous_post;
    $categories = recup_category();
    include_once("template/$url[0].php");
endif;
*/

//------- Route page blog
if(@$url[0]=='contact'):    
    include_once("template/$url[0].php");
endif;

//------- Route page blog-details\

if(@$url[0]=='blog-details'):
    $service1 = recup_services();
    $article2 = recup_article();
    $categories1 = recup_category();
    $mat_article= strip_tags(@$url[1]); //==Matricule de l'article
    $detai_post=recup_detail_post($mat_article) ;  
    // var_dump($detai_post);
    if(empty($detai_post)){
        header("location:../home");
    }else{
        include_once("template/$url[0].php");
    }
endif;


//------- Route page service
//je viens
/*
if(@$url[0]=='service'):
    $article3 = recup_article();
    $services = recup_services();
    $article2 = recup_article();
    include_once("template/$url[0].php");

endif;
*/
//------- Route page service-details
/*
if(@$url[0]=='service-details'):
    $mat_service= strip_tags(@$url[1]); 
    $det_service= Recuper_service_detail($mat_service);
    if(empty($det_service)){
         header("location: ../home");
    }else{
    include_once("template/$url[0].php");
    }
endif;
*/



