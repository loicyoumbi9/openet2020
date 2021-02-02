
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
		<link rel="stylesheet" href="css/tchat.css">
		<title>Tchat</title>
	</head>
	<body>
		<?php include("fixe/entete.php"); ?>	
			<section class="corps">
				<div class="hrt">
				<?php 
				$id_dest = $_GET['id'];
					$contacts = 'SELECT prenom, id  FROM users where id =:id';
					$req_call = $bdd->prepare($contacts);
					$req_call->execute(["id"=>$id_dest])
						or die(print_r($req_call->errorInfo()));
					if($data = $req_call->fetch()){ 
				?>
					<span id="t"> Tchat avec <?= $data['prenom']?> </span>
					<?php } ?>
				</div>
				<section class="tchats">	
						<?php $a = $_GET['id']; include("traiter_tchat.php");
						?>
				</section>
				<section class="message">
						<form method="post" action="tchat.php?id=<?=$a?> "
						refresh-url="tchat.php?id=<?=$a?> ">
							<p>
								<textarea name="texte" class="texte" placeholder="Ecrivez quelques choses">	
								</textarea><br/>
								<input type="submit" id="submit" value="Envoyer" />
								<input type="reset" id="reset" value="Annuler" />
							</p>
						</form>
					
				</section>
			</section>
		<?php include("fixe/pied.php"); ?>
	</body>
	</HTML>