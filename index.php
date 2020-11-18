<?php

include_once "src/newphp.php";
include_once "src/data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROULLAND Thomas</title>
    <link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="font/css/all.css">
</head>
<body class="home">
    

    
<?php 

include "src/header.php";
include "src/apropos.php";
include "src/competences.php";
include "src/experience.php";
include "src/formation.php";
include "src/contact.php";


?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script>
    $(window).scroll(function(){
        if($(window).scrollTop()){
            $("nav").addClass("black");
        }
        else{
            $("nav").removeClass("black");
        }
    });
</script>
</body>
</html>

