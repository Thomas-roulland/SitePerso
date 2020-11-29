    <?php

    include_once "src/newphp.php";
    include_once "src/data.php";

    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="font/css/all.css">
        <link rel="stylesheet" href="css/newstyle.css">
    </head>
    <body id="mention"> 
    
    <div id="mention">

    
        <nav >
                <div class="postion">
                <?php 
                foreach($nomcomp as $item) { ?>
                    <a class=" barre gauche" href="index.php"><?php echo $item;?></a>
                <?php } ?>
        
                </div>
        </nav>

        <div class="container">

        <a class="bthome" href="index.php"><i class="fas fa-home"></i></a>

        <p class="subtitle">Informations légales</p>  

        <p class="title-primary">I. Présentation du site.</p> 

        <div class="moitier">
        <p>En vertu de l'article 6 de la loi no 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site www.siteweb.com l'identité des différents intervenants dans le cadre de sa
        réalisation et de son suivi :</p> 
        </div>

       
       <div class="left">
       <p>Propriétaire : Roulland Thomas Etudiant 7 rue des randonnées</p> 
       <p>Créateur : Roulland Thomas</p> 
       <p>Responsable publication : Roulland- thomas.roulland@sts-sio-caen.info</p>   
       <p>Le responsable publication est une personne physique ou une personne morale.</p>  
       <p>Webmaster : Roulland Thomas - thomas.roulland@sts-sio-caen.info</p> 
       <p>Hébergeur : Roulland Thomas - 7 rue des randonnées</p> 
       </div>
       <p class="title-primary">Crédits :</p> 
       <p>Le modèle de mentions légales est offert par Subdelirium.com Modèle de mentions légales</p>  
       <p class="title-primary">Confidentialité</p> 
       <div class="moitier">
       <p>Ce site ne collecte aucune donnée nominative à votre insu. Ainsi votre adresse mail ne sera pas conservée à des fins commerciale ou statistiques, elle servira uniquement à vous recontacter. Ainsi vous acceptez en me
        contactant que je conserve votre adresse pendant une durée d'une semaine, afin de poursuivre les échanges engagés.</p> 
        </div>
        <p class="title-primary">Cookies</p> 
        <p>Nous n'utilisons et ne collectons aucuns cookies internes ou tierces.</p> 
        <p class="title-primary"> Données cartographiques</p> 
        <p>Nous n'utilisons et ne collectons aucunes données cartographiques.</p> 
        </div>


                    



                </div>
                <div id="foot">
        <div class="footer">
            <p>@ROULLAND Thomas</p>
            <p>07.77.77.00.66</p>
            <p>7 rue des randonnées, EVRECY 14210</p>
        </div>
        </body>
    </html>