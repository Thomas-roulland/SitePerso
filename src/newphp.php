<?php
require_once '../recaptcha/src/autoload.php';


if(isset($_POST['submitpost'])){

	if(!empty($_POST['g-recaptcha-response'])){
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['mess']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<img src="http://www.primfx.com/mailing/banniere.png"/>
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
                    <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['mess']).'
					<br />
					<img src="http://www.primfx.com/mailing/separation.png"/>
				</div>
			</body>
		</html>
		';

		mail("contact.roullandthomas@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}  

}else{
	$msg_captcha="<p class='form_error_2'><i class='fas fa-times'></i> merci de valider le captcha</p>";
}
if(isset($msg)) {
	echo $msg;
} //on écrit le message qu'il soit la confirmation d'envoi ou un message d'erreur

if(isset($msg_captcha)) {
	echo $msg_captcha;
}
}


?>