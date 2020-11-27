<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<div id="formation">
        <div class="description">
            
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
                 <img class="image1" src="images/supavenir.png" alt="">
        </div>
    </div>
    </body>
</html>