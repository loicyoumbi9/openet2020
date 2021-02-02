<?php
session_start();
$id_source = $_SESSION['id'] ;
$username = $_SESSION['username'];
$nom = $_SESSION['nom'] ;
$prenom = $_SESSION['prenom'] ;

?>
<!DOCTYPE HTML>
<HTML>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/contacts.css">
		<title>Contacts</title>
	</head>
	<body>
		<?php include("fixe/entete.php"); ?>
			
			<section class="corps">

				<div class="hrt">
					<span id="t"> Vos contacts </span>
				</div>
				<?php include("traiter_contacts.php"); ?>
			</section>
		<?php include("fixe/pied.php"); ?>
	</body>
	</HTML>