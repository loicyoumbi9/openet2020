<!DOCTYPE HTML>
<HTML>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/inscription.css">
		<title>Inscription</title>
	</head>
	<body>
		<header class="en_tete">
			<a href="index.php"><img src="images/image_logo.jpg" id="logo"/></a>
			<nav class="lien">
				<a href="index.php" id="lien_page"> Connexion </a>
			</nav>
		</header>
			<h4>Bienvenu sur OpenNetwork, veuillez remplir le formulaire suivant pour vous inscrire.</h4>
			<section class="corps">
				<fieldset class="trait"><legend>Inscription</legend>
					<form method="post" action="traiter_inscription.php">
						<p>
							<label for="nom" id="coord">Nom:</label><br/>
							<input type="text" name="nom" id="nom" placeholder="Entrer votre nom" /><br/>
							<label for="prenom" id="coord"  >Prenom:</label><br/>
							<input type="text" name="prenom" id="prenom" placeholder="Entrer votre prenom"/><br/>
							<label for="pseudo" id="coord">Username:</label><br/>
							<input type="text" name="pseudo" id="pseudo" placeholder="Entrer votre username"/><br/>
							<label for="pass" id="coord">Mot de passe:</label><br/>
							<input type="password" name="pass" id="pass" placeholder="Entrer votre passwrd"/><br/>
							<label for="sexe" id="sexe">Sexe:</label><br/>
								<input type="radio" name="sexe" value="M" id="homme"/> <label for="sexe">H</label>
								<input type="radio" name="sexe" value="F" id="femme"/> <label for="sexe">F</label><br />
							<div class="date">
								<label for="mois" id="date1">Date de naissance:</label><br />
								<select name="jour" id="jour">
									<option value="default">Jour</option>
									<?php 
										for($i=1; $i<31; $i++){
											echo '<option value='.$i.'>'. $i .'</option>' ;
										}
									?>
									<!--<option value="jour1">01</option>
									<option value="jour2">02</option>
									<option value="jour3">03</option>
									<option value="jour4">04</option>
									<option value="jour5">05</option>
									<option value="jour6">06</option>
									<option value="jour7">07</option>
									<option value="jour8">08</option>
									<option value="jour9">09</option>
									<option value="jour10">10</option>
									<option value="jour11">11</option>
									<option value="jour12">12</option>
									<option value="jour13">13</option>
									<option value="jour14">14</option>
									<option value="jour15">15</option>
									<option value="jour16">16</option>
									<option value="jour17">17</option>
									<option value="jour18">18</option>
									<option value="jour19">19</option>
									<option value="jour20">20</option>
									<option value="jour21">21</option>
									<option value="jour22">22</option>
									<option value="jour23">23</option>
									<option value="jour24">24</option>
									<option value="jour25">25</option>
									<option value="jour26">26</option>
									<option value="jour27">27</option>
									<option value="jour28">28</option>
									<option value="jour29">29</option>
									<option value="jour30">30</option>
									<option value="jour31">31</option>-->
								</select> - 
								<select name="mois" id="mois">
									<option value="default">Mois</option>
									<?php 
									
									for($j=1; $j<=12; $j++){
										echo '<option value='.$j.'>'. $j .'</option>';	
									}
									?>
									<!--<option value="mois1">01</option>
									<option value="mois2">02</option>
									<option value="mois3">03</option>
									<option value="mois4">04</option>
									<option value="mois5">05</option>
									<option value="mois6">06</option>
									<option value="mois7">07</option>
									<option value="mois8">08</option>
									<option value="mois9">09</option>
									<option value="mois10">10</option>
									<option value="mois11">11</option>
									<option value="mois12">12</option>-->
								</select> - 
								<select name="annee" id="annee">
									<option value="default">Annee</option>
									<?php 
									for($k=1; $k<=40; $k++){
										$a = 1980 + $k;
										echo '<option value='.$a.'>'.$a.'</option>' ;
									}
									?>
									<!--<option value="annee0">1980</option>
									<option value="annee1">1981</option>
									<option value="annee2">1982</option>
									<option value="annee3">1983</option>
									<option value="annee4">1984</option>
									<option value="annee5">1985</option>
									<option value="annee6">1986</option>
									<option value="annee7">1987</option>
									<option value="annee8">1988</option>
									<option value="annee9">1989</option>
									<option value="annee10">1990</option>
									<option value="annee11">1991</option>
									<option value="annee12">1992</option>
									<option value="annee13">1993</option>
									<option value="annee14">1994</option>
									<option value="annee15">1995</option>
									<option value="annee16">1996</option>
									<option value="annee17">1997</option>
									<option value="annee18">1998</option>
									<option value="annee19">1999</option>
									<option value="annee20">2000</option>
									<option value="annee21">2001</option>
									<option value="annee22">2002</option>
									<option value="annee23">2003</option>
									<option value="annee24">2004</option>
									<option value="annee25">2005</option>
									<option value="annee26">2006</option>
									<option value="annee27">2007</option>
									<option value="annee28">2008</option>
									<option value="annee29">2009</option>
									<option value="annee30">2010</option>
									<option value="annee31">2011</option>
									<option value="annee32">2012</option>
									<option value="annee33">2013</option>
									<option value="annee34">2014</option>
									<option value="annee35">2015</option>
									<option value="annee36">2016</option>
									<option value="annee37">2017</option>
									<option value="annee38">2018</option>
									<option value="annee39">2019</option>
									<option value="annee40">2020</option>-->
								</select><br/>
							</div>
							<label for="ville" id="coord">Ville:</label><br/>
							<input type="text" name="ville" id="ville" placeholder="Entrer votre ville" /><br />
							<input type="submit" id="submit" value="Envoyer" />
							<input type="reset" id="reset" value="Annuler" />
						</p>
					</form>
				</fieldset>
			</section>
		<?php include("fixe/pied.php"); ?>
	</body>
	</HTML>
