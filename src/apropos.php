<?php

include "php.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROULLAND Thomas</title>
    <link rel="stylesheet" href="css/apropos.css">
</head>
<body>
    
<div class="body">
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

        <div class="description">
            <div class="title-primary"><?php echo $aPropos['title'];?></div>
            <div class="subtitle"><?php echo $aPropos['subTitle'];?></div>
            <div class="accroche"><?php echo $aPropos['accroche'];?></div>
            <div class="text"><?php echo $aPropos['contentFile'];?></div>
            <img src="images/lol.jpg" alt="">
            <div></div>

         </div>


</body>
</html>