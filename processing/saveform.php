<?php 
//var_dump($_POST);
if(isset($_POST['submit'])){
    $Nom=test_input($_POST['name']);
    $Profession = test_input($_POST['profession']);
    $Message = test_input($_POST['message']);
    $FILES = $_FILES['image'];
    $chemin = "Profil/Temoignages/";
    $image=traiter_image($chemin, $FILES);
    // IdTemoignage	ProfilTemoignage	NomTemoignage	ProfessionTemoignage	MessageTemoignage	

    if(!empty($Nom) && !empty($Profession) && !empty($Message) && !empty($image)){  
        $DB->query("INSERT INTO Temoignage (ProfilTemoignage, NomTemoignage, ProfessionTemoignage, MessageTemoignage)
        VALUES(:ProfilTemoignage, :NomTemoignage, :ProfessionTemoignage, :MessageTemoignage)",
            [
                'ProfilTemoignage'=>$image,
                'NomTemoignage'=>$Nom,
                'ProfessionTemoignage'=>$Profession,
                'MessageTemoignage'=>$Message 
            ]
        );
    }
} 



















?>