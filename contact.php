<?php


//vérification des données:
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_add = strip_tags(htmlspecialchars($_POST['email']));
$object = strip_tags(htmlspecialchars($_POST['object'])); 
$message = strip_tags(htmlspecialchars($_POST['message']));
/* -strip_tags() tente de retourner la chaîne string après avoir supprimé tous les octets nuls, toutes les balises PHP 
et HTML du code. Elle génère des alertes si les balises sont incomplètes ou erronées. 
Elle utilise le même moteur de recherche que fgetss(). 
- htmlspecialchars — Convertit les caractères spéciaux en entités HTML*/


//Envoi d'e-mail et réception des informations:
$to = 'pauline.frare-pradal@laposte.net';


$email_subject = "Object: $object";
$email_body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre portfolio.\n\n"."Voici les détails:\n\nName: $name\n\nEmail: $email_add\n\nMessage: $message";
$headers = "From: noreply-pauline.frare-pradal@laposte.net";
$headers = "Reply-To: $email_add";


if($message !=''){
    $res = mail($to,$email_subject,$email_body,$headers);
    if ($res == true){
        require "message.php";
    } else {
        die("Un problème est survenu, veuillez recommencer");
    }    
}


return true;

?>