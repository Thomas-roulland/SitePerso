<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


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
                        <label>Message :*</label>
                        <textarea name="mess" required></textarea>
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
           <a href="mention.php"> <p class="bold">Mentions légales, crédits</p> </a> 
            <p>@ROULLAND Thomas</p>
            <p>07.77.77.00.66</p>
            <p>7 rue des randonnées, EVRECY 14210</p>
        </div>
    </div>

        </body>
</html>