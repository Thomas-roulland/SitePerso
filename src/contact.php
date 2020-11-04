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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   
</head>
<body class="contact">
    

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

      
            <form action="contact.php" method="POST" name="inscription">
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
            </form>
    
            
            <?php

                echo $msg;

            ?>
</body>
</html>