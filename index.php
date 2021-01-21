<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="blocIntro.css">
    
    <title>Emilie GIRE Website</title>
</head>
<body>
    <!--Ensemble de la page d'accueil du site en Français-->
<div id=accueilFr>
        
    <!-- ******************************************************************************************************* -->
        
    <!--Intro du site avec animations des feuilles-->
        <div class="blocTextFeuilles">
                       
            <div class="blocFeuilles">
                <a href="#titre"><img src="images/arrow.png" class="arrowButton"></a>

                <img src="images/accueil_jungle/ShadowLeftTop.png" class="shadowUn">
                <img src="images/accueil_jungle/ShadowRightTop.png" class="shadowDeux">
                <img src="images/accueil_jungle/leftTopPink02.png" class="leafUn"> 
                <img src="images/accueil_jungle/topMiddleSmallGreen.png" class="leafDeux">
                <img src="images/accueil_jungle/topPalmAndSmall.png" class="leafTrois">
                <img src="images/accueil_jungle/FlowerTopRight.png" class="flowerQuatre">
                <img src="images/accueil_jungle/rightTopYellow.png" class="leafCinq">
                <img src="images/accueil_jungle/rightbottom004.png" class="leafSix">
                <img src="images/accueil_jungle/leftTopPink02.png" class="leafSixBis">
                <img src="images/accueil_jungle/bottomGrey.png" class="leafSept">
                <img src="images/accueil_jungle/bottom.png" class="leafHuit">
                <img src="images/accueil_jungle/LeftTopsmallGreen01.png" class="leafNeuf">
                <img src="images/accueil_jungle/left01.png" class="leafDix">
                <img src="images/accueil_jungle/leftBottom02.png" class="leafOnze">
            </div> 
            
            <div class="blocText">
                <p class="Hello"> Hello </p>
                <p class="Emilie"> <span>Emilie</span> 's</p>
                <p class="World"> World ! </p>
            </div>
          
        </div>
        
    <!-- ******************************************************************************************************* --> 

        <!-- ******************************************** -->
        <!-- HEADER - Bandeau principal (titre + navbar) -->
        <?php require "menu.php"; ?>
        <!-- ******************************************** -->

    
    <!-- CONTENT - On attaque le corps du site avec plusieurs sections-->
    <div class="content">
    
        <!--Création du bandeau latéral sticky (dans CSS) pour les réseaux sociaux-->
<aside class="socialNetwork">
    <ul>
        <li> <a  href="fake-facebook.php">
            <img class="facebookIcone" title="Facebook" src="images/facebook.png" alt="logo de facebook"></a> </li>
        <li> <a  href="fake-ig.php">
            <img class="instagramIcone" title="Instagram" src="images/instagram.png" alt="logo d'instagram"></a> </li>
        <li> <a href="https://fr.linkedin.com/in/emilie-gir%C3%A9-78b38662">
            <img class="linkedinIcone" title="LinkedIn" src="images/linkedin.png" alt="logo de LinkedIn"></a> </li>
        <li>  <a href="https://viadeo.journaldunet.com/p/emilie-gire-liatard-277885">
            <img class="viadeoIcone" title="Viadeo" src="images/viadeo.png" alt="logo de Viadeo"></a> </li>
    </ul>
</aside>

    <!--Pour chaque nouvelle section, on crée un objet ancre qui permettra de lier
        la navbar à la section, sans être géné par la hauteur du bandeau de titre-->
        
        <!--Première section : intro Let's talk tea-->
        <section class="globalIntro">
            
            <div class="textIntro">    
                <h2>Let's talk tea !*</h2>    
                <p>
                    Eh oui ... au risque de me mettre le monde du développement à dos, je n'aime pas
                le café !<br>
            
                Je préfère le thé ! Mais pas d'inquiétudes, mon amour pour JAVA et javascript
                n'en est en rien impacté ! <br>
                Et puis, avouez : on y voit que du feu ! <br>
                <br>
                Enfin, trève de bavardage ! Je vous laisse découvrir...
                <br><a href="#presentation">la recette pour créer mon Monde...</a><br><br>
                <span> * Tout comme "Java" signifie "Café" en argot américain, "Let's talk tea" est une expression utilisée pour signifier "Parlons potins". </span>
            </p>
        </div>
        
        <img class="photoIntro" src="images/moi-enjava_resize.jpg">
        
    </section>
    
    <div id="presentation"></div>

    <!-- ******************************************** -->
    <!--Création du bouton retour vers le haut-->

    <div class="topButton">
        <a href="index.php#anchorHeader">
            <img title="Retour en haut du site" src="images/arrowTop.png" alt="retour haut"></a> 
        </div>
    <!-- ******************************************** -->
       
    
    <!-- Deuxième section : présentation plus poussée -->
        <section class="presentation">
            
            <h2> Un peu de moi...</h2>
        <p>
            Bonjour !<br>
            <br> Et bienvenue sur mon site.
        </p>
      
        <p>
            Je m'appelle Emilie Liatard ! Enfin ... ça c'était avant que je me marie !
            <br> Je m'appelle donc maintenant Emilie Giré (c'est cool, c'est plus court et plus facile à épeler !).
        </p>
        <p>
            <br>Nous sommes installés à Janzé,
            <br>petit bourg de caractère,
            <br>plein de charme,
            <br>où il fait bon vivre...<br>
        <p>
                ... Oui bon, on ne va pas se mentir, il y a surtout un énorme Centrakor !
        </p>
        <p>
                Je suis Nantaise d'origine, et je n'ouvrirai pas de débat concernant la Bretagne... ;-)
            </p>

        <p>
            J'aime créer, et à ce titre, je suis également curieuse : <br>
            j'aime découvrir des nouveautés, apprendre comment telle ou telle chose fonctionne,
            et c'est tout naturellement que je me suis plongée dans le monde de la couture il y a maintenant plus de 5 ans.<br>
            J'ai d'ailleurs créé un blog sous Wordpress, où je présente mes projets couture.
        </p>
        <p>
            A mes heures perdues, j'aime aussi manipuler les outils Adobe :<br>
            pour finir le montage vidéo de nos dernières vacances avec Premiere Pro et After Effects,<br>
            pour créer un nouveau logo pour mon blog sur Photoshop,<br>
            ou encore pour retoucher quelques photos d'une séance famille, toujours avec Photoshop.<br>
        </p>

        <p>
                <br> J'ai fais mes études à Angers, puis suis venue sur Janzé pour le travail.
                <br> Mais scroll un peu plus bas pour voir, tu en sauras plus sur mon parcours ;-).
        </p>
        <p>    
               <br> PS : Oui, je suis aussi bavarde...
        </p>    
        
        
    </section>
    
    <div id="parcours"></div>
   
    
<!-- Troisième section : Mon parcours avant l'ENI -->
<section class="parcours">
    <h2>...une pincée de formations...</h2>
    <p> A la base, j'ai un parcours plutôt classique :
    
        un BAC Général Scientifique,
            <br> puis une classe préparatoire pour devenir Vétérinaire (rien que ça !)...
            <br> Après avoir loupé mes concours (personne n'est parfait !),
            <a href="https://www.agrocampus-ouest.fr/formation/ingenieurs/ingenieur-en-horticulture" title="Ingénieur en Horticulture">
            <img class="logos_sections logo_Agrocampus" src="images/agrocampus-ouest.png" alt="Agrocampus Ouest">
            </a>
            <br> j'ai intégré Agrocampus Ouest à Angers,
            <br> anciennement l'INH : Institut National d'Horticulture*
            <br>(*sous-filière de l'agriculture qui concerne exclusivement la production végétale).

            <br> Jusque là, ça va !
            <br>
           <br>Ce n'est pas fini !
</p>    
        <p>
            Pendant mes études, on nous a énormément formé au monde de la recherche scientifique.
            <br> Et qui dit recherche (plus familièrement : "R&D") dit... analyses statistiques de données !
            <br> Nos profs étant trèèès pédagogues (tu captes l'ironie ?) j'ai détesté mes premiers pas avec ce module.
            <br> Et comme c'était encore trop simple, ils nous ont fait exclusivement travailler en langage R.
            
            <img class="logos_sections logo_Agrocampus" src="images/R_logo.png" alt="Agrocampus Ouest">
            
            <br>
            <br>J'y ai passé des soirées, des nuits, des journées, j'ai acheté des livres pour mieux comprendre,
            je les ai surlignés, post-ités (oui je viens de créer ce verbe)... BREF tu as compris : j'ai fini par maîtriser le
            langage R, et surtout par AIMER ça !!
        </p>
    
        <p>
            Une fois mon diplôme en poche, j'ai cherché en toute logique, et par affinité, à travailler dans la R&D
            appliquée au monde du végétal (INRA & co.).
            <br>
            <br>Bon, le truc un peu balo : la R&D, ça n'embauche pas ! Surtout au niveau BAC+5 (ironie quand tu nous
            tiens...).
            <br>
            <br> J'ai donc travaillé en production. Très formateur, passionnant, mais aussi très prenant, mentalement et
            physiquement.
            <br> Pendant presque 3 ans, j'ai travaillé en tant que chef de culture dans des serres de tomates hors-sol.
            <br> Tout était contrôlé par ordinateur : la ferti-irrigation, le climat, le chauffage. J'adorais découvrir
            petit à petit les fonctionnalités
            du logiciel, qui était assez complexe (logiciel Priva - Entreprise Coria).
    
        </p>
    
        <p>
    
            Après une rupture conventionnelle en mai 2019, j'ai reconsidéré mon projet professionnel.
            <br> Je ne souhaitais pas reprendre un poste de chef de culture, car ayant trop d'impact sur ma vie privée.
            Mais en excluant ce type de job, je ne trouvais pas non plus d'offres d'emplois qui correspondaient à mon profil.
        </p>
        <p>
            Je me suis donc mise en tête de m'orienter vers l'informatique, pour a termes, relier mes deux formations :
            l'informatique, appliquée à l'agriculture.
            <br>Depuis mon bac+5, je m'étais découvert un intérêt pour le codage à travers le langage R.
            <br> J'ai également toujours aimé "bidouillé" sur ordinateur : faire un clic droit sur une page pour voir le
            code source de la page, sans rien comprendre...
            <br> Je me suis formée en autodidacte aux logiciels de la suite Adobe : After Effects, Dreamweaver, Illustrator,
            InDesign ;
            mais surtout Photoshop et Premiere Pro.
        </p>
    
        <p>
            J'ai toujours aimé créer du contenu, et du joli.
            <br> Ce qui peut expliqué ma dernière passion en date : la couture.
            <br> Partir de rien, un bout de tissu, pour en faire quelquechose de beau, et d'utile.
            <br>
            <br> Pour moi, le travail du développeur s'apparente également à cela : faire du beau (interface graphique) et de
            l'utile : la majorité des entreprises ont aujourd'hui un site internet, ne serait-ce que pour gagner en visibilité.
        </p>
        <p>
            Tu veux connaitre mon dernier ingrédient secret ? Va un peu plus bas ! ;)
            </p>
    
    </section>

    <div id="experiences"></div>

    <section class="experiences">
        <h2>...et un zeste de créativité !</h2>
       
       
       
       
        
        
        
        
        
        <div class="exp_container_global">
            
            <div class="exp_container first_website">
            <a href="firstWebsite.php"> <h3>Mon premier site web</h3>
            </a>
        </div>

       
        <div class="exp_container collectiveProjects">
            <a href="collectiveProjects.php"> 
            <h3>Projets collectifs</h3>
        </a>
    </div>
            
            <div class="exp_container photoshop">
        <a href="picMakeover.php"> <h3>Retouches photos</h3>
        </a>  
        </div>      

            <div class="exp_container videosMaking">    
        <a href="videoMaking.php"> <h3>Montages vidéos</h3>
        </a>
            </div>
                

        <div class="exp_container sewing_projects">    
        <a href="sewingPage.php"> <h3>Un peu de couture par ici</h3>
        </a>
        </div>

        </div>

    </section>


  
   </div>

   <!-- Fin du CONTENT -->
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

