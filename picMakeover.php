<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="blocIntro.css">
    <link href="cndk.beforeafter.css" rel="stylesheet">
    <title>Retouches photos</title>
</head>
<body>
    
 <!-- ******************************************** -->
        <!-- HEADER - Bandeau principal (titre + navbar) -->
        <?php require "menu.php"; ?>
        <!-- ******************************************** -->

   <div class="portfolio_page picMakeover">

   <h2>Retouches photos avant/après</h2>
   <h3>Fait glisser le curseur pour comparer avant/après</h3>
      <h4>photos : Emilie Giré</h4>

  <div class="groupeImage">    

<!-- ************** Premiere image : pieds ***************************** -->

<div class="beforeimagetest pieds">
       <div data-type="data-type-image" class="data-type-image">
         <div data-type="before"><img src="images/before_after/pieds_avant.jpg"></div>
         <div data-type="after"><img src="images/before_after/pieds_apres.jpg"></div>
      </div>
   </div>

   <div class="beforeimagetest_smalldevices">
       <div class="before">
          <h2>Avant</h2>
          <img src="images/before_after/pieds_avant.jpg">
       </div>

      <div class="after">
         <h2>Après</h2>
         <img src="images/before_after/pieds_apres.jpg">
      </div> 
   </div>

   </div>


<!-- ************** Deuxieme image : oie ***************************** -->

    <div class="beforeimagetest oie">
       <div data-type="data-type-image" class="data-type-image">
         <div data-type="before"><img src="images/before_after/oie_avant.jpg"></div>
         <div data-type="after"><img src="images/before_after/oie_apres.jpg"></div>
      </div>
   </div>

   <div class="beforeimagetest_smalldevices">
       <div class="before">
          <h2>Avant</h2>
          <img src="images/before_after/oie_avant.jpg">
      </div>

      <div class="after">
         <h2>Après</h2>
         <img src="images/before_after/oie_apres.jpg">
      </div> 
   </div>

   
 
   </div>
        
        <!-- ******************************************** -->
   <!-- Footer -->
   <?php require "footer.php"; ?>
   <!-- ******************************************** -->
   

    <!-- ******************************************** -->
    <!-- ******** SCRIPTS JAVASCRIPT **************** -->
    <!-- ******************************************** -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="cndk.beforeafter.js"></script>  
    <script src="beforeAfter.js"></script>

  <!-- pour maintenir le footer en bas de page
  >>>>>>>>>>>>>>>>> lien dans "footer.php" -->
 
    <!-- Script JS pour afficher le menu déroulant sur petits écrans -->
 <script src="menuSmallDevices.js"></script>


</body>
</html>