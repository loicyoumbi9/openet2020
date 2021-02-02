<!DOCTYPE HTML>
<HTML>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/connexion.css">
		<title>Connexion</title>
	</head>
	<body>
		<header class="en_tete">
			<img src="images/image_logo.jpg" id="logo"/>
			<nav class="lien">
				<a href="inscription.php" id="lien_page"> Inscription </a>
			</nav>
		</header>
			<h4>Bienvenu sur OpenNetwork, veuillez entrer vos parametres de connexion.</h4>
			<section class="corps">
				<fieldset class="trait"><legend>Connexion</legend>
					<form method="post" action="traiter_connexion.php">
						<p>
							<label for="pseudo" id="pseudo">Username:</label><br/>
							<input type="text" name="pseudo" id="pseudo" class="coord" placeholder="Entrer votre username"/><br />
							<label for="pass" id="coord">Mot de passe:</label><br/>
							<input type="password" name="password" id="password" class="coord" placeholder="Entrer votre passwrd"/><br/>
							<input type="submit" id="submit" value="Envoyer" />
							<input type="reset" id="reset" value="Annuler" />
						</p>
					</form>
				</fieldset>
			</section>
		<?php include("fixe/pied.php"); ?>
	</body>
	</HTML>