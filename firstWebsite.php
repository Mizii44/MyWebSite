<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="blocIntro.css">
    <title>Mon premier site web</title>
</head>
<body>
    
 <!-- ******************************************** -->
        <!-- HEADER - Bandeau principal (titre + navbar) -->
        <?php require "menu.php"; ?>
        <!-- ******************************************** -->

<div class="portfolio_page">
      <h2>Mon premier site web</h2>

      <p>

      J'avais créé ce site avec Dreamweaver avant l'obtention de mon diplôme en 2015.
      <br>En toute logique, j'avais orientée ma thématique sur le végétal.
      </p>
      <p>
      J'avais utilisé les outils suivants :
      </p>

      <ul>
      <li>FileZilla pour mettre en ligne
      <li>Le serveur FTP gratuit d'Orange pour l'hébergement
      </ul>  
      <p>
      Voici le lien :<br>
      <a href="https://eliatard.pagesperso-orange.fr/">https://eliatard.pagesperso-orange.fr/</a>  
    </p>
        

</div>




        <!-- ******************************************** -->
   <!-- Footer -->
   <?php require "footer.php"; ?>
   <!-- ******************************************** -->
   
    <!-- ******************************************** -->
  
  <!-- pour maintenir le footer en bas de page
  >>>>>>>>>>>>>>>>> lien dans "footer.php" -->
 
    <!-- Script JS pour afficher le menu déroulant sur petits écrans -->
 <script src="menuSmallDevices.js"></script>


</body>
</html>