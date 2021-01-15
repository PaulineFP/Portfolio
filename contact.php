<?php
// si les données ne sont pas soumisent:
if(empty($_POST['name']) ||
empty($_POST['email']) ||
!filter_var($_POST['email']) ||
empty($_POST['object']) ||
empty($_POST['message'])) {
    echo"Le formulaire que vous avez soumis contient des erreurs, il manque des informations. <br/>";
    echo "Merci de les corriger.";
    return false;
}

//vérification des données:
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_add = strip_tags(htmlspecialchars($_POST['email']));
$object = strip_tags(htmlspecialchars($_POST['object'])); 
$message = strip_tags(htmlspecialchars($_POST['message']));
/*  -strip_tags() tente de retourner la chaîne string après avoir supprimé tous les octets nuls, toutes les balises PHP et HTML du code. Elle génère des alertes si les balises sont incomplètes ou erronées. Elle utilise le même moteur de recherche que fgetss(). 
    - htmlspecialchars — Convertit les caractères spéciaux en entités HTML*/


// Envoi d'e-mail et réseption des informations:
$to = 'p.frare@codeur.online';
$email_subject = "Contact: $name";
$email_body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre portfolio.\n\n"."Voici les détails:\n\nName: $name\n\nEmail:$email_add\n\nObjet:$object\n\nMessage:$message";
$headers = "From: noreply-p.frare@codeur.online\n";
$headers = "Répondre à : $email_add";
/*mail($to,$email_subject,$email_body,$headers);
echo 'Message à bien été envoyé! Vous allez être redirigé vers mon Portfolio.';*/
header('refresh: 3; url=index.html');
return true
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pauline FRRARE-PRADAL</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="message">
        <div class="messageB">
            <?php mail($to,$email_subject,$email_body,$headers);
            echo 'Message à bien été envoyé! Vous allez être redirigé vers mon Portfolio.'; ?>
        </div>
     <footer class="footer">
        <p>&copy 2020 - Pauline Frare-Pradal</p>
    </footer>
    </div>
</body>
<html>