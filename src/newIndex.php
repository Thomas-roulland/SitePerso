<?php

include "newphp.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROULLAND Thomas</title>
    <link rel="stylesheet" href="../css/newstyle.css">
    <link rel="stylesheet" href="../font/css/all.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
</head>
<body class="home">
    <div id="home" class="block-container">
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
            <div class="couleur">
                <div class="wrapper">
                    <a href="#">
                        <i class=" lien fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="lien fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="lien fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="lien fab fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="lien fas fa-at"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="apropos" class="description">
        <div class="title-primary"><?php echo $aPropos['title'];?></div>
        <div class="subtitle"><?php echo $aPropos['subTitle'];?></div>
        <div class="accroche"><?php echo $aPropos['accroche'];?></div>
        <div class="text"><?php echo $aPropos['contentFile'];?></div>
        <img src="../images/lol.jpg" alt="">
    </div>

    <div id="competences">
        <div class="description">
            <div class="title-primary"><?php echo $competence['title'];?></div>
            <i class="subtitle fas fa-laptop-code"></i>
            <div class="subtitle"><?php echo $competence['subtitle'];?></div>
            <div class="accroche"><?php echo $competence['accroche'];?></div>
            <div class="top">
                <div class="container">
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
                                    <h2 class="text">HTML</h2>
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
            </div>
        </div>
    </div>


    
    <div id="experience" >
        <div class="description">
            <div class="title-primary"><?php echo $experience['title']; ?></div>
            <div class="subtitle"><?php echo $experience['subtitle']; ?></div>
            <div class="contenu">
                <div class="bloc1">
                    <div id="type2" class="type2"><?php echo $experience['poste']; ?></div>
                    <div id="type4" class="type4"><?php echo $experience['etablissement']; ?></div>
                    <div  id="type3" class="type3"><?php echo $experience['date']; ?></div>
                    <div id="type4" class="type4"><?php echo $experience['lieux']; ?></div>
                    <i class="logo-shop fas fa-store"></i>
                </div>
                    <div class="bloc2">
                        <div class="text"><?php echo $experience['descriptif']; ?></div>
                    </div>    
            </div>

                 <div class="contenu">
                     <div class="bloc1">
                        <div class="type2"><?php echo $experience1['poste']; ?></div>
                        <div class="type4"><?php echo $experience1['etablissement']; ?></div>
                        <div class="type3"><?php echo $experience1['date']; ?></div>
                        <div class="type4"><?php echo $experience1['lieux']; ?></div>
                        <i class="logo-shop2 fas fa-store"></i>
                     </div>
                     <div class="bloc2">
                        <div class="text"><?php echo $experience1['descriptif']; ?></div>
                    </div>
                </div>

            <a class="link" href="CV.pdf" download><input class="btn" type="button" value="Télécharger mon CV" ></a> 
            
        </div>
    </div>

    <div id="formation">
        <div class="description">
                <div class="title-primary"><?php echo $formation['title']; ?> </div>
                <div class="bloc">
                    <img class="image1" src="../images/supavenir.png" alt="">
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
    </div>

    

    <div id="contact">
        <form action="newIndex.php" method="POST" name="inscription">
            <div class="contact-section">
                <div class="contact-form">
                    <h1>Contact Moi</h1>
                    <div class="txtb">
                        <label>Nom :*</label>
                        <input type="text" name="nom" value="" placeholder="Entrer votre nom" required>
                    </div>

                    <div class="txtb">
                        <label>Email :*</label>
                        <input type="email" name="mail" value="" placeholder="Entrer votre Email" required>
                    </div>

                    <div class="txtb">
                        <label>Numéro de téléphone :</label>
                        <input type="text" name="tel" value="" placeholder="Enrtrer votre numéro de téléphone" >
                    </div>

                    <div class="txtb">
                        <label>Message :</label>
                        <textarea name="mess"></textarea>
                    </div>
                    <div class="middle">
                        <div class="g-recaptcha" data-sitekey="6LdyRt4ZAAAAAITLhfV8OZCyeaRGcWMQMlQJ6o81"></div>
                    </div>
                    <input class="btn" type="submit" value="Valider" name="submitpost">
                </div>    
                
            </div>
        </form>
    </div>


    <div id="foot">
        <div class="footer">
            <p class="bold">Mentions légales, crédits</p>
            <p>@ROULLAND Thomas</p>
            <p>07.77.77.00.66</p>
            <p>7 rue des randonnées, EVRECY 14210</p>
        </div>
    

</body>
</html>

