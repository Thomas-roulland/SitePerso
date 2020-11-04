<?php

include "php.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROULLAND Thomas</title>
    <link rel="stylesheet" href="../CSS/apropos.css">
    <link rel="stylesheet" href="../font/css/all.css">
</head>
<body class="expe">
    

        <div class="topnav1">
            <?php 
            foreach($nomcomp as $item) { ?>
                <a class=" barre gauche" href="index.php"><?php echo $item;?></a>
            <?php } ?>
            <?php 
            foreach($menu as $label => $link) { ?>
                 <a class="barre nav" href="<?php echo $link;?>"><?php echo $label;?></a>
            <?php } ?>
         </div>

         <div class="description">

            <div class="title-primary3"><?php echo $experience['title']; ?></div>
            <div class="subtitle3"><?php echo $experience['subtitle']; ?></div>
           
            
            <div class="contenu">
                <div class="bloc1">
                    <div class="subtitle2"><?php echo $experience['poste']; ?></div>
                    <div class="subtitle4"><?php echo $experience['etablissement']; ?></div>
                    <div class="subtitle3"><?php echo $experience['date']; ?></div>
                    <div class="subtitle4"><?php echo $experience['lieux']; ?></div>
                    <i class="logo-shop fas fa-store"></i>
                 </div>
                 <div class="bloc2">
                    <div class="text1"><?php echo $experience['descriptif']; ?></div>
                </div>    
            </div>

            <div class="contenu">
                <div class="bloc1">
                    <div class="subtitle2"><?php echo $experience1['poste']; ?></div>
                    <div class="subtitle4"><?php echo $experience1['etablissement']; ?></div>
                    <div class="subtitle3"><?php echo $experience1['date']; ?></div>
                    <div class="subtitle4"><?php echo $experience1['lieux']; ?></div>
                    <i class="logo-shop2 fas fa-store"></i>
                 </div>
                 <div class="bloc2">
                    <div class="text1"><?php echo $experience1['descriptif']; ?></div>
                </div>
            </div>

            <a class="link" href="CV.pdf" download><input class="btn1" type="button" value="Télécharger mon CV" ></a> 
            
        </div>
         

        <div class="couleur">
        <div class="wrapper">

        <a href="#"><i class="lien fab fa-facebook-f"></i></a>
        <a href="#"><i class="lien fab fa-twitter"></i></a>
        <a href="#"><i class="lien fab fa-instagram"></i></a>
        <a href="#"><i class="lien fab fa-linkedin"></i></a>
        <a href="#"><i class="lien fas fa-at"></i></a>

        </div>
        </div>

</body>
</html>