<?php 
session_start();
//65707eb0c3041 //6561d3dd3bbf7 65c3e2b8e0756 / 662f2c0f2234e / 

//--------- lien des images de Service 
$img_service ="https://akila.blog/img_service/";
//--------- lien des images des articles 
$url_image ="https://akila.blog/@ressouce/mg_etablissement/"; 
//---------lien du logo de l'entreprise
$lien_logo ="https://akila.blog/logo_site/"; 
//---------lien pour les bannieres de l'entreprise
$image_banniere ="https://akila.blog/image_baniere/";
//------- partenaire
$logo_partenaire = "https://akila.blog/@ressouce/logo_site/";   // lien des logos des partenaire 
//---------- page offre
$Lien_image_offres="https://akila.blog/img_page/";   // lien des logos des partenaire


// include "bd/query.php" ;
$matricule_entreprise = "662f2c0f2234";
include "api/api_info_entreprise.php";
include "api/api_header.php";
include "api/fonctionne.php";
include "api/api_services.php";
include "api/api_equipe.php";
include "api/api_article.php";
include "api/api_detail_post.php";
include "api/api_info_admin.php";
include "api/api_categorie.php";
include "api/api_partner.php";
include "api/api_offres.php";

// include "api/api_services.php";

// [ville] => Douala
//     [region] => Littoral
//     [email] => lamaisondesbillets@gmail.com
//     [quartier] => Bonadiotto
//=====informations du fichier api_header.php o
$nom_entreprise = $info_header-> nom_entreprise;
$logo         =       @$info_header->logo;
//----------Menue
$page1_menu1  =       @$info_header->page1;
$page_nemu2   =       @$info_header->page2;
$page_nemu3   =       @$info_header->page4;
$whatsapp     =       @$info_header->whatsapp;
//------------contact
$region        =       @$info_header->region;
$quartier     =       @$info_header->quartier;
$ville     =       @$info_header->ville;
$telephone    =       @$info_header->telephone; 
$emal_entreprise =       @$info_header->email;
//---------- reseau sociaux
$lien_facebook=       @$info_header->lien_fb; 
$lien_twitter =       @$info_header->twitter;
$lien_linkedin =       @$info_header->lien_linkedin;
$youtube      =       @$info_header->youtube;
$instagram    =       @$info_header->instagram;
//------- titre sur les blogs
$titre_service=       @$info_header->titre_service;
$titre_member =       @$info_header->titre_member;
$titre_page_blog=     @$info_header->titre_blog;
//-------- Appercu
$decription_entreprise = @$info_header->decription;
$google_map_entreprise = @$info_header->google_map;
$couleur1_entreprise =   @$info_header->color1;
$couleur2_entreprise =   @$info_header->color2;
//---------- Mentions 
$mention_titre = @$info_header -> mention_titre;
$mention_des = @$info_header ->mention_des;
$mention1 = @$info_header -> mention1;
$mention_titre1 = @$info_header -> mention_titre1;
$mention2 = @$info_header -> mention2;
$mention_titre2 = @$info_header -> mention_titre2;
$mention3 = @$info_header -> mention3; 
$mention_titre3 = @$info_header -> mention_titre3;
$mention4 = @$info_header ->mention4;
$mention_titre4 = @$info_header -> mention_titre4;
//=======information du fichier api_info_entreprise.php //
//------------ Bannieres
$banniere1  =           @$dataEntreprise->about_image1;
$banniere2 =            @$dataEntreprise->banniere_image2;
$banniere3 =            @$dataEntreprise->banniere_image3;

$titre_banniere1 =      @$dataEntreprise->t_baniere1;
$description_baniere1=  @$dataEntreprise->d_baniere1;
$titre_banniere2 =      @$dataEntreprise->t_baniere2;
$description_baniere2=  @$dataEntreprise->d_baniere2;
$titre_banniere3 =      @$dataEntreprise->t_baniere3;
$description_baniere3=  @$dataEntreprise->d_baniere3;
//---------------- Notre particularité
$titre_s1=              @$dataEntreprise->titre_s1;
$discription_s1 =       @$dataEntreprise->discription_s1;

$titre_s2=              @$dataEntreprise->titre_s2;
$discription_s2 =       @$dataEntreprise->description_s2;

$titre_s3   =           @$dataEntreprise->titre_s3;
$discription_s3 =       @$dataEntreprise->description_s3;
//--------------- Apropos
$apropos_de_lentreprise=    @$dataEntreprise->propos;
$image_about =          @$dataEntreprise->banniere_site1;
//------------- Motivation
$motivation_titre =     @$dataEntreprise->motivation_titre;
$motivation_desription =@$dataEntreprise->motivation_desription;
$motivation_img =       @$dataEntreprise->motivation_img;


?>

<?php /*<style>
    :root {
        --bs-prima: <?= $couleur1_entreprise ?> ;
    }
</style> */?>