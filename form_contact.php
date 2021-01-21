<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="blocIntro.css">
    <title>Formulaire de contact Emilie Giré</title>
</head>
<body>
    <!-- ******************************************** -->
        <!-- Bandeau principal (titre + navbar) et la barre flottante des réseaux sociaux -->
        <?php require "menu.php"; ?>
        <!-- ******************************************** -->


    <!-- Formulaire de contact -->

    <form class="formulaire" name="formulaire" method="post" action="post_contact.php">
        <h2>Formulaire de contact</h2>
        <p>
            <label for="nom">Nom:</label>
            <br>
            <input class="formtext" name="nom" id="nom" type="text" required placeholder="Térieur">
            <br>
            <br>

            <label for="prenom">Prénom :</label>
            <br>

            <input class="formtext" name="prenom" id="prenom" type="text" required placeholder="Alex">
            <br>
            <br>
            <label for="email">Adresse e-mail :</label>
            <br>
            <input class="formtext" name="email" id="email" type="email" required placeholder="alexterieur@ilfaitbeau.com">
            <br>
            <br>
            <label for="message">Message :</label>
            <br>
            <textarea class="formtext" id="message" placeholder="Hello World !" name="message" rows="10" cols="50" required></textarea>

            <br>
            <button type="reset" class="btn_contact btn_contact_reset"> Réinitialiser </button>
            <button type="submit" class="btn_contact btn_contact_submit"> Go j'envoie ! </button>

        </p>
    </form>

<!-- ******************************************** -->
<!-- Footer -->
<?php require "footer.php"; ?>
<!-- ******************************************** -->
 <!-- Script JS pour afficher le menu déroulant sur petits écrans -->
 <script src="menuSmallDevices.js"></script>

</body>

</html>