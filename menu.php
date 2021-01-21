<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  
</body>
</html>

<!--Intro du site sans animation, pour petits écrans-->
  
<div class="blocIntroSmallScreen">
       <img src="images/logo_smalldevices.png">
   </div>

      <!--Création d'un objet non sticky pour permettre les liens d'ancrage-->
      <div id="anchorHeader"></div>

<!--En-tête bandeau sticky du site-->
<header class="header">

<!--Titre du site qui apparaît dans le bandeau-->
     <div class = "titreContact">
       <h1 id="titre" class="titre"> Emilie Giré </h1>
       <a href="form_contact.php" title="Contactez-moi !" alt="Contact Emilie Giré">- Contact -</a>
      
      <!--Création du bouton menu déroulant pour petits écrans-->
       <div class="open-btn">
         <div class="open-btn-bar"></div>
         <div class="open-btn-bar open-btn-bar-middle"></div>
         <div class="open-btn-bar"></div>
       </div>
      </div>
            
      <!--Menu navbar du site-->
      <nav class="navbar_container">
        <ul class="navbar">
        <li> <a href="index.php#anchorHeader" title="Retour à la case départ !" alt="Accueil Emilie Giré"> Accueil</a></li>
          <li> <a href="index.php#presentation" title="Attention je suis bavarde !" alt="Présentation Emilie Giré">Présentation </a></li>
        <li> <a href="index.php#parcours" title="Accroche ta ceinture..." alt="Parcours Emilie Giré">Mon parcours</a></li>
        <li><a href="index.php#experiences" title="Soyons sérieux 2 minutes" alt="Portfolio Emilie Giré">Portfolio</a></li>
        <!--  <li><a href="jeux.html" title="Quelques jeux par ici !" alt="Jeux Développement Web Emilie Giré">Let's Play!</a></li> -->
        </ul>
        
        
        <ul class="navbar_responsive">
          <div class="close-btn">
              <div class="close-btn-bar close-btn-bar-rotate"></div>
              <div class="close-btn-bar"></div>
            </div>
          <li> <a href="index.php#anchorHeader" title="Retour à la case départ !" alt="Accueil Emilie Giré"> Accueil</a></li>
          <li> <a href="index.php#presentation" title="Attention je suis bavarde !" alt="Présentation Emilie Giré">Présentation </a></li>
        <li> <a href="index.php#parcours" title="Accroche ta ceinture..." alt="Parcours Emilie Giré">Mon parcours</a></li>
        <li><a href="index.php#experiences" title="Soyons sérieux 2 minutes" alt="Portfolio Emilie Giré">Portfolio</a></li>
        <!--  <li><a href="jeux.html" title="Quelques jeux par ici !" alt="Jeux Développement Web Emilie Giré">Let's Play!</a></li> -->
      </ul>
    </nav>
    
  </header>
  

  
</html>

