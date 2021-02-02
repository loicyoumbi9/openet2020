<?php
session_start();
include_once("connection_db.php");
$id_source = $_SESSION['id'] ;
$username = $_SESSION['username'];
$nom = $_SESSION['nom'] ;
$prenom = $_SESSION['prenom'] ;

?>
<!DOCTYPE HTML>
<HTML>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/profil.css">
		<title>Profil</title>
	</head>
	<body>
		<?php include("fixe/entete.php"); ?>
			
			<section class="corps">
				
				<div class="hrt">
					<span id="t"> Vos informations de profil </span>
				</div>
				<?php 
				$a = $_SESSION['id'] ;
					$sql = 'select * from users where id=:id';
					$req = $bdd->prepare($sql);
					$req->execute(["id"=>$a])
						or die(print_r($req->errorInfo()));	
						
				?>
				
				<div class="pub">
				<?php if($data = $req->fetch()){ ?>
					
					<span id="sender">Nom: <?= $data['nom'] ?></span><br/>
					<span id="sender">Prenom: <?= $data['prenom'] ?></span><br/>
					<span id="sender">Username: <?= $data['username'] ?></span><br/>
					<span id="sender">Sexe: <?= $data['sexe'] ?></span><br/>
					<span id="sender">Age: <?php 
						$age =$data['date_naissance']; 
						 list($year, $month, $day) = explode("-", $age);
						 $annee= date('Y') - $year;
						 echo $annee;
						 
						 ?></span><br/>
					<span id="sender">Ville: <?= $data['ville'] ?></span><br/>
				<?php } ?>
				</div>

				

			</section>
		<?php include("fixe/pied.php"); ?>
	</body>
	</HTML>