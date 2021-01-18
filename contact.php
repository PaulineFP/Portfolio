<?php

require "message.php";

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
$to = 'p.frare@codeur.online';
$email_subject = "Contact: $name";
$email_body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre portfolio.\n\n"."Voici les détails:\n\nName: $name\n\nEmail:$email_add\n\nObjet:$object\n\nMessage:$message";
$headers = "From: noreply-p.frare@codeur.online\n";
$headers = "Répondre à : $email_add";
mail($to,$email_subject,$email_body,$headers);
return true;

?>