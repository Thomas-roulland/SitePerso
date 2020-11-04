<?php
$nomcomp=['ROULLAND Thomas'];
$menu = ['A propos' => 'apropos.php','Compétences' => 'competences.php','Expérience' => 'experience.php','Formation' => 'formation.php','Contact' => 'contact.php'];
$aPropos=['title'=>'ROULLAND Thomas','subTitle'=>'Etudiant en informatique','accroche'=>'Vive les 0/1','contentFile'=>'
Ayant actuellement 19 ans, je suis étudiant en BTS SIO en option
SLAM. J’ai pour projet de travailler dans le web ou mobile, car se
sont des branches qui me plaisent énormément depuis mon enfance.'];
$competence=['title'=> 'Compétences','subtitle'=>'Développement, technologies','accroche'=>'rubrique développement'];
$formation=['title'=>'Formation','subtitle'=>'BTS Services Informatiques','accroche'=>'SupAvenir Sainte-Ursule','localisation'=>"Caen, Normandie",'contenu'=>
'Conception et administration de bases de données, conception Web, génie logiciel, cybersécuité et configuration de réseaux, architecture informatique.'
,'Sous-contenu'=>'Langages et outils : HTML/CSS, PYTHON, SQL.', 'Sous-contenu1'=>'Concepts: Algorithmique, POO, méthode Merise.'];
$experience=['title'=>'Expérience','subtitle'=>'professionnelle','poste'=>'Employé Commericial','etablissement'=>'CORA','date'=>' 1 mois en 2019 et 2 mois 2020','lieux'=>'Rots'
,'descriptif'=>'Durant ces mois de travail, j’ai réalisé différentes tâches comme la mise en rayon, la relation avec les clients puis la gestion des stocks de mon rayon.
Cela m’a permis de voir ce qu’est le travail dans la grande distribution, et cela a enrichi mon savoir faire.'];
$experience1=['poste'=>'Conseiller Vente','etablissement'=>'CORA','date'=>' En cours','lieux'=>'Rots'
,'descriptif'=>'Je suis actuellement en travail étudiant en tant que conseillé vente dans la rayon électroménager, technologies et je suis chargé aussi de l’acceuil des clients.'];
$nom=['ROULLAND'];
$prenom=['THOMAS'];
$statut=['étudiant'];




require_once 'recaptcha/src/autoload.php';
if(isset($_POST['submitpost'])){

    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['tel']) AND !empty($_POST['mess']))
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
                    <u>Téléphone de l\'expéditeur :</u>'.$_POST['tel'].'<br />
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

        
    
}
  

?>