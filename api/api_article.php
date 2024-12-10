<?php
  $url_image="https://akila.blog/@ressouce/mg_etablissement/"; // lien des images des articles
// $matricule_entreprise="654b7262c7d05";

//===== recuper les tous les articles =====
if(isset($_GET['mat_categori'])){
    $mat_categori=$_GET['mat_categori'];
    recupProduitCategorie($mat_categori);
    $obj_tous_post= recupProduitCategorie($mat_categori);  // recuper les articles d'une d'une categories
}else{
    
    $obj_tous_post= recup_article(); // recuper tous les les articles
}
// print_r( $obj_tous_post); 
//==== fin de recuperation==========

//===================================================================================================================================
//---------------------- Recuper tous les posts
function recup_article(){
    global $matricule_entreprise;
    

    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    ); 


  $url="https://akila.blog/api/articles/$matricule_entreprise";

  $options = array(
   'http' => array(
     'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
     'method'  => 'POST',
    //  'content' => http_build_query($data)
   )
  );
  $context  = stream_context_create($options);
  $result= file_get_contents($url,  false, stream_context_create($arrContextOptions));
  $obj_tous_post = json_decode($result);
  if ($obj_tous_post === FALSE) { /* Handle error */ }
  // var_dump($categories);
  return  $obj_tous_post;
}



//----------- affiche le detail d'un post
/*
if (isset($_GET['mat_post']) AND !empty($_GET['mat_post'])) {
    $mat_post=$_GET['mat_post'];
    $detail_post = recup_detail_post($mat_post);
}else{
    header("location:home");

} */
//======================================================

function recup_detail_post($mat_post){
    global $matricule_entreprise;
  $obj='';
  if(isset($mat_post)) {
      $matricule_post=trim($mat_post);
      
      $url="https://akila.blog/api/articles/$matricule_entreprise/$matricule_post"; //---enligne
  
      $data= file_get_contents($url);
      $ob_blog=json_decode($data);
      // var_dump($ob_blog);
      if(empty($ob_blog)) {
          // header("location: ../blog");
      } else {
          // $obj= json_decode($data);
          $obj=$ob_blog;
      } 
  
  }
  return  $obj[0];

}


/*

Array
(
    [0] => stdClass Object
        (
            [id] => 128
            [photo] => 24-02-08-43akila_blog.jpg
            [titre] => Comment choisir le meilleur billet d'avion pour vos voyages : Conseils pratiques" par La Maison des Billets +
            [sous_titre] => 
            [content] => 
            [matricule] => 65c4a1d7b96a3
            [date] => 2024-02-08
            [time] => 09:41:43
            [datetime] => 2024-02-08 09:41:43
            [id_categorie] => 6080929
            [categorie_magasine] => 112201210
            [user_admin] => bayiha
            [matricule_entreprise] => 65c3e2b8e0756
            [date1] => 
            [publie] => 2
            [mots_cles] => /La Maison des Billets +/Billets d'avions
            [img_vedette] => 0
            [meta_description] => 
            [meta_titre] => 
            [siviteurs] => 
            [jaime] => 0
            [matricule_admin] => 15215885894
            [lien_service] => http://wa.me/237656277945
            [call_action] => Cliquez sur ce bouton pour réservez votre billets d'avions Maintenant
        )

)



*/
