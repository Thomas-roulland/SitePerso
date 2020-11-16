<?php

include_once "newphp.php";
include_once "data.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/newstyle.css">
    <link rel="stylesheet" href="../font/css/all.css">
</head>
<body class="home">
    
<div id="home" class="block-container">
        <div class="block block-blue">
            <nav>
                 <div class="postion">
            <?php 
            foreach($nomcomp as $item) { ?>
                <a class=" barre gauche" href="newIndex.php"><?php echo $item;?></a>
            <?php } ?>
            <?php 
            foreach($menu as $label => $link) { ?>
                <a class="barre deco" href="<?php echo $link;?>"><?php echo $label;?></a>
            <?php } ?>
                 </div>
            </nav>
            
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
            <div class="couleur">
                <div class="wrapper">
                    <a href="https://www.facebook.com/thomas.roulland.9" target="_blank">
                        <i class=" lien fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/RoullandThomas"target="_blank">
                        <i class="lien fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/roulland.thomas/"target="_blank">
                        <i class="lien fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/thomas-roulland-128a691b5/"target="_blank">
                        <i class="lien fab fa-linkedin"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>