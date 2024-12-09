<?php
if(isset($_POST['submit'])){
$nom= test_input($_POST['name']);
$email=test_input($_POST['email']);
$tel = test_input($_POST['tel']);
$message=test_input($_POST['message']);
if(!empty($nom) && !empty($email) && !empty($tel) && !empty($message)){  
    $DB->query("INSERT INTO contact (NomContact, EmailContact, TelephoneContact, MessageContact)
    VALUES(:NomContact, :EmailContact, :TelephoneContact, :MessageContact)",
        [
            'NomContact'=>$nom,
            'EmailContact'=>$email,
            'TelephoneContact'=>$tel,
            'MessageContact'=>$message 
        ]
    );
   // header("location:../keedi-logistics");
}
}


?>