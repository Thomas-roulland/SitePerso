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
<body class="competence">
    

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
         <div class="title-primary2"><?php echo $competence['title'];?></div>
         <i class="subtitle2 fas fa-laptop-code"></i>
         <div class="subtitle2"><?php echo $competence['subtitle'];?></div>
         <div class="accroche2"><?php echo $competence['accroche'];?></div>
        <div class="jsp">
        <div class="container2">
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>  
                        <div class="number">
                        <h2>90<span>%</span></h2>
                        </div>  
                        <div>
                            <h2 class="text2">HTML</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>  
                        <div class="number">
                        <h2>80<span>%</span></h2>
                        </div>  
                        <div>
                            <h2 class="text2">CSS</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
                        </svg>  
                        <div class="number">
                        <h2>40<span>%</span></h2>
                        </div>  
                        <div>
                            <h2 class="text2">JAVASCRIPT</h2>
                        </div>
                    </div>
                </div>
            </div>
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