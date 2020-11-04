<?php

include "php.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROULLAND Thomas</title>
    <link rel="stylesheet" href="CSS/index.css">
    
</head>
<body class="home">
    <div class="block-container">
    
        <div class="block block-blue">
            <div class="topnav">
            <?php 
            foreach($nomcomp as $item) { ?>
                <a class=" barre gauche" href="index.php"><?php echo $item;?></a>
            <?php } ?>
            <?php 
            foreach($menu as $label => $link) { ?>
                <a class="barre nav" href="<?php echo $link;?>"><?php echo $label;?></a>
            <?php } ?>

            </div>
            
                <div class="container">
                <?php 
                 foreach($nom as $item) { ?>
                <div class="title-primary"><?php echo $item;?></div>
                 <?php } ?>
                 <?php 
                 foreach($prenom as $item) { ?>
                <div class="subtitle"><?php echo $item;?></div>
                 <?php } ?>
                 <?php 
                 foreach($statut as $item) { ?>
                <div class="text"><?php echo $item;?></div>
                 <?php } ?>
                </div>

        </div>
        <div class="block block-red">

        </div>
    </div>
    
        

</body>
</html>

