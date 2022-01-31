<?php 

    if (empty ($_POST["nom"])) {  
        $msg = "Veuillez entrer un nom";  
        echo $msg;  
    } 
    else {  $name = $_POST["nom"]; }  

    if (empty ($_POST["prenom"])) {  
        $msg = "Veuillez entrer un nom";  
        echo $msg;   
    } 
    else {  $prenom = $_POST["nom"]; } 

    if (empty ($_POST["user_messagel"])) {  
        $msg = "Veuillez entrer un message";  
        echo $msg;   
    } 

    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    $email = $_POST ['email'];  
    if (!preg_match ($pattern, $email) ){  
        $msg = "Email is not valid.";  
                echo $msg;  
    } 

     



?>