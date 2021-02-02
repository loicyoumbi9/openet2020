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
		<link rel="stylesheet" href="css/messages.css">
		<title>Messages</title>
	</head>
	<body>
		<?php include("fixe/entete.php"); ?>
			
			<section class="corps">
			
				<div class="hrt">
					<span id="t"> Vos messages </span>
				</div>

				<?php include("traiter_messages.php"); ?>

			</section>
		<?php include("fixe/pied.php"); ?>
	</body>
	</HTML>