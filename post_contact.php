<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fonts.css">

</head>
<body>

<?php

$message = $_POST['message'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$nomprenom = trim(strtoupper($_POST['nom'])).' '.trim(strtolower($_POST['prenom']));
$emailContact = $_POST['email'];
$emailPerso = 'e.gire@outlook.com';
$headers = 'From:  '.$nomprenom.' <'.$emailContact.'>';

$mail = mail($emailPerso, 'formulaire de contact', $message, $headers);

if ($mail == true) {
    ?>
<div class="sendingMail">
<h2 class="email_sent"> Email Envoyé !</h2>
<a class="button_back" href="form_contact.php">Retour</a>
</div>
<?php
}else {
?>
<div class="sendingMail">
<h2 class="email_sent"> ERREUR - Email non envoyé</h2>
<a class="button_back" href="form_contact.php">Retour</a>
</div>

<?php
}

?>


</body>
</html>