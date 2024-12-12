<?php

// $chemin="../../@ressouce/mg_etablissement/";
// $chemin1="/@ressouce/mg_etablissement/";
// // $chemin1="../@ressouce/mg_etablissement/";
// $chin_logo="../../@ressouce/logo_site/";
// $img_partage="../../@ressouce/logo/";
// $img_document="../../@ressouce/document/";
// $img_page="../../@ressouce/img_page/";
// $img_member="../../@ressouce/photo_membrer/"; //-- ajouter


// $chemin2="../../@ressouce/couverture_banniere/";
// $chemin_service="../../@ressouce/img_service/";
// $profile="../../@ressouce/profile/";


$chemin=$url_image; //------ dossier des image des poste;
$chin_logo; //------- dossier des logo de l'entreprise;
$img_partage;//------ dossier des logo des partenaires;
$img_document; //------dossiers des documents de l'entreprise;
$img_page="../../@ressouce/img_page/";
$img_member; //-------- dossiers des photo des membre de l'entreprise""; 
$chemin2; //------dossiers des bannieres de l'entreprise";
$chemin_service; //----- dossiers des images des services";
$profile; //------dossiers des photos de profil";
url();// permet de recuperer url de chaque page;
$logo_club="../../@ressouce/logo_club/"; //--ajouter
// var_dump(getUrl());

// function affichage_img($image,$chemin){
//     $img='';
//     if(!empty($image)){
//      if (!filter_var($image, FILTER_VALIDATE_URL) === false) {
//         $img=$image;
//       } else {
//         $img=$chemin . $image;
//           }
//     }
//     return $img;
// }




$matricule_entreprise; // matricule de l'entreprise
// var_dump($matricule_entreprise);
$nbre_vues; // afficher le nombre de vues info_entreprise()

// $recupe_info_Webside=$DB->query('SELECT * FROM website WHERE matricule_entreprise=:matricule LIMIT 1',array("matricule"=>$matricule_entreprise));
$recupe_info_Webside = info_entreprise();

$nom_entreprise= $recupe_info_Webside->nom_entreprise;
$id_core= $recupe_info_Webside->id_core;
$cours_nom_entreprise=$recupe_info_Webside->cours_nom;
$logo=$recupe_info_Webside->logo;
$quartier=$recupe_info_Webside->quartier;
$ville=$recupe_info_Webside->ville;
$region=$recupe_info_Webside->region;
$telephone=$recupe_info_Webside->telephone;
$mail=$recupe_info_Webside->email;
$facebook=$recupe_info_Webside->lien_fb;
$linkedin=$recupe_info_Webside->lien_linkedin;
$twitter=$recupe_info_Webside->twitter;
$youtube=$recupe_info_Webside->youtube;
$instagram=$recupe_info_Webside->instagram;
$description=$recupe_info_Webside->decription;
$nomber=$recupe_info_Webside->whatsapp;
$whatsapp=$recupe_info_Webside->whatsapp;

$couleur_entreprise1=$recupe_info_Webside->color1;
$couleur_entreprise2=$recupe_info_Webside->color2;

$pixel_fb=$recupe_info_Webside->pixel_fb;
$google_map=$recupe_info_Webside->google_map;
$grand_titre_service=$recupe_info_Webside->titre_service;
$grand_titre_posts=$recupe_info_Webside->titre_blog;
$bouton_whatsapp=$recupe_info_Webside->bouton_whatsapp;
$titre_sur_le_membre=$recupe_info_Webside->titre_member;

@$page1=$recupe_info_Webside->page1;
@$page2=$recupe_info_Webside->page2;
@$page3=$recupe_info_Webside->page3;
@$page4=$recupe_info_Webside->page4;

 @$grand_titre_member=$recupe_info_Webside->titre_member; //--ajouter

@$nom_domaine=$recupe_info_Webside->nom_domaine;
@$num_banniere=$recupe_info_Webside->banniere;

//==============call to action
$textbouton=$recupe_info_Webside->textbouton;
$lienbouton=$recupe_info_Webside->lienbouton;



//-- new ligne
$recup_member= info_equipe() ;
// var_dump($recup_member);
//-- new ligne

//---- Recup les articles 
$blogs= $obj_tous_post;
// $blogs_rand= $Register->query("SELECT * FROM blog  WHERE  matricule_entreprise=:matricule AND publie=2  ORDER By RAND()",array('matricule'=>$matricule_entreprise));
//---- Recup les articles 

//---------------------------------------- les informations de la table
$info_du_website = entreprise();

$info_partenaire = info_partenaire();

$img_banniere=$info_du_website->about_image1;
$img_banniere2=$info_du_website->banniere_image2;
$img_banniere3=$info_du_website->banniere_image3;

$titre_banniere1= $info_du_website->t_baniere1;
$description_banniere1=$info_du_website->d_baniere1;
$titre_banniere2= $info_du_website->t_baniere2;
$description_banniere2=$info_du_website->d_baniere2;
$titre_banniere3= $info_du_website->t_baniere3;
$description_banniere3=$info_du_website->d_baniere3;

@$img_about=$info_du_website->banniere_site1;
@$apropos_de_lentreprise= $info_du_website->propos;

@$titre_banniere_service=$info_du_website->titre_banniere_service;
@$titre_banniere_blog=$info_du_website->titre_banniere_blog;
@$titre_banniere_member=$info_du_website->titre_banniere_member;
//---------------------------------------- les informations de la table


//--------------------------------------------------------- var_dump($rucup_info_etablissement); 23/11/2024

$titre_s=$info_du_website->titre_s;
$titre_s1=$info_du_website->titre_s1;
$titre_s2=$info_du_website->titre_s2;
$titre_s3=$info_du_website->titre_s3;
$discription_s1=$info_du_website->discription_s1;
$discription_s2=$info_du_website->description_s2;
$discription_s3=$info_du_website->description_s3;

$mention_des=$info_du_website->mention_des;
$mention_titre=$info_du_website->mention_titre;

$mention1=$recupe_info_Webside->mention1;
$mention_titre1=$recupe_info_Webside->mention_titre1;
$mention2=$recupe_info_Webside->mention2;
$mention_titre2=$recupe_info_Webside->mention_titre2;
$mention3=$recupe_info_Webside->mention3;
$mention_titre3=$recupe_info_Webside->mention_titre3;
$mention4=$recupe_info_Webside->mention4;
$mention_titre4=$recupe_info_Webside->mention_titre4;

$motivation_titre=$info_du_website->motivation_titre;
$motivation_desription=$info_du_website->motivation_desription;
$motivation_img=$info_du_website->motivation_img;

@$offre_titre=$info_du_website->offre_titre;
@$offre_descripr=$info_du_website->offre_descripr;
@$offre_img=$info_du_website->offre_img;

$titre_banniere_service=$info_du_website->titre_banniere_service;

//=================== 20/07/2024
$_SESSION["prix_tunnel_vente"]=$recupe_info_Webside->prix_tunnel_vente;
$prix=$recupe_info_Webside->prix_tunnel_vente;
$iso=$recupe_info_Webside->code_iso;
$_SESSION["code_iso"]=$recupe_info_Webside->code_iso;
$_SESSION["lien_de_telechargement"] = $recupe_info_Webside->lien_de_telechargement;
$_SESSION["paiement_tunnel"]= $recupe_info_Webside->paiement_tunnel;


$_SESSION["paiement_tunnel"] = $recupe_info_Webside->paiement_tunnel;
$_SESSION["paiement_tunnel"] = $recupe_info_Webside->paiement_tunnel;

$url=explode('?',url());
$_SESSION["url"]=$url;
// var_dump($_SESSION['retourlien']);

//======= Nouve 02/08/2024
@$video_tunnel=$recupe_info_Webside->video_tunnel;  // nouvo 26/07/2024
@$video_position=$recupe_info_Webside->video_position; 


// $recupe_page_site=$DB->query('SELECT * FROM page WHERE matricule_entreprise=:matricule AND page_vente=non LIMIT 1',array("matricule"=>$matricule_entreprise));



// // Timestamp actuel
// echo time(); // -> 1630116380
// echo"<br>";

// $date1 = new DateTime("2023-03-08");
// $date2 = new DateTime("2023-03-15");

// $diff = $date2->diff($date1);

// echo $diff->days . " jours";
// echo"<br>";

 //$url= 
// function recupe_service($indice){
//     global $matricule_entreprise;
//     global $DB;
//     return $DB->query("SELECT * FROM service WHERE matricule_entreprise=:matricule AND formation=$indice",array("matricule"=>$matricule_entreprise)); info_offres()
// }


@$recupe_page_site = info_offres();
// @$recupe_page_site=$DB->query('SELECT * FROM page WHERE matricule_entreprise=:matricule AND page_vente=:non LIMIT 1',array("matricule"=>$matricule_entreprise,'non'=>'non'));
// var_dump(recupe_service(4));
// @$recupe_page_aganda=$DB->query('SELECT * FROM page WHERE matricule_entreprise=:matricule AND page_ag=:page_ag LIMIT 1',array("matricule"=>$matricule_entreprise,'page_ag'=>1));
@$service=recup_services();


// var_dump(@$recupe_page_site);
//===============nouveaux 18/072024
$_SESSION['email_website']=$mail;
$_SESSION['mat_website']=$matricule_entreprise;
$_SESSION['nom_website']=$nom_entreprise;

$chapitre1="L'histoire du savon, Les différents types de savons, Les bienfaits des savons artisanaux";
$chapitre2="Comprendre le processus chimique, Les ingrédients essentiels : huiles, beurres, soude caustique,Équipements nécessaires";
$chapitre3="Savon à l'huile d'olive; Savon au beurre de karité; Savon exfoliant à l'avoine";
$chapitre4="Marbrage et effets visuels; Incorporation d'huiles essentielles et de colorants naturels; Fabrication de savons liquides";
$chapitre5="Manipulation de la soude caustique; Mesures de sécurité à suivre; Conseils pour éviter les erreurs courantes";
$chapitre6="Étude de marché et business plan; Stratégies de marketing et de vente; Réglementation et certifications";
$chapitre7="Glossaire des termes techniques; Adresses des fournisseurs d'ingrédients et d'équipements; ";
$chapitre8="Glossaire des termes techniques; Adresses des fournisseurs d'ingrédients et d'équipements; ";



// $nom_page = $info_page->nom_page;
// $titre_page = $info_page->titre;
// $content_page = $info_page->content;
$titre_page = $recupe_page_site[0]->titre;
$titre_page1 = @$recupe_page_site[1]->titre;
$img_banniere = @$recupe_page_site[0]->img_banniere;
$img_banniere1 = @$recupe_page_site[1]->img_banniere;

// $page_vente = $info_page->page_vente;
// $telephone_lien = $info_page->telephone_lien;
// $text_bouton = $info_page->text_bouton;

// $mat_service = $info_page->matricule_page;

 ?>
