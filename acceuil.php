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
		<link rel="stylesheet" href="css/acceuil.css">
		<title>Accueil</title>
	</head>
	<body>
		<?php include("fixe/entete.php"); ?>
			<section class="corps">
				
				<section class="message">
					<fieldset class="mes"><legend>Publier</legend>
						<form method="post" action="traiter_publication.php">
							<p>
								<textarea class="texte" name="texte" placeholder="Ecrivez quelques choses">	
								</textarea><br/>
								<input type="submit" id="submit" value="Envoyer" />
								<input type="reset" id="reset" value="Annuler" />
							</p>
						</form>
					</fieldset>
				</section>
			
				<div class="hrt">
					<hr id="ligne_d">
					<span id="t"> Publications </span>
					<hr id="ligne_g" >
				</div>
				
				<section class="publication">
					<?php 
					include_once("connection_db.php");
					
						$publications = array();
						$sender = array();
						$donnees = array();
						$result = array();
						$publications = $bdd->query('SELECT * FROM publication ORDER BY date_post DESC');
						while ($donnees = $publications->fetch()){
							$a = $donnees['id_source'];
							if(!empty($donnees)){
								$sql = 'select prenom, id from users where id=:id';
								$req = $bdd->prepare($sql);
								$req->execute(["id"=>$a])
								or die(print_r($req->errorInfo()));	
							?>
							<div class="pub">
									<p id="sender"><?php if($data = $req->fetch()){ 
										if($data['id'] == $_SESSION['id']){
											echo 'Vous avez publié';
										}else{echo $data['prenom'] ;
											  echo ' a publié ';}
										} ?>  </p>
									<nav class="content">
									<p id="contenu"><?= $donnees['contenu'] ?></p>
								<p id="date"><?= $donnees['date_post'] ?></p>
								</nav>
							</div>
						<?php }else{
							echo "vous n avez pas encore de message";
						}?>
					<?php } ?>
				</section>
			</section>
		<?php include("fixe/pied.php"); ?>
	</body>
	</HTML>