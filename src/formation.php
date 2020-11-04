<?php

include "php.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROULLAND Thomas</title>
    <link rel="stylesheet" href="CSS/apropos.css">
    <link rel="stylesheet" href="font/css/all.css">
</head>
<body>
    

        <div class="topnav">
            <?php 
            foreach($nomcomp as $item) { ?>
                <a class="barre gauche" href="index.php"><?php echo $item;?></a>
            <?php } ?>
            <?php 
            foreach($menu as $label => $link) { ?>
                 <a class="barre nav" href="<?php echo $link;?>"><?php echo $label;?></a>
            <?php } ?>
         </div>

        <div class="description2">
            <div class="title-primary"><?php echo $formation['title']; ?> </div>
            <div class="bloc">
            <div class="subtitle"><?php echo $formation['subtitle']; ?> </div>
            <div class="accroche"><?php echo $formation['accroche']; ?> </div>
            <i class="logo-loc fas fa-map-marker-alt"></i>
            <div class=""><?php echo $formation['localisation']; ?> </div>
            </div>
            <div class="text-bloc">
            <div class="space"><?php echo $formation['contenu']; ?> </div>
            <div class="space"><?php echo $formation['Sous-contenu']; ?> </div>
            <div class="space"><?php echo $formation['Sous-contenu1']; ?> </div>
            </div>

        </div>

</body>
</html>