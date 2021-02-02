<?php
	session_start();
	include_once("connection_db.php");
	
	if( isset($_POST['pseudo']) && isset($_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['password']))
	{
		$sql = 'select id, nom, prenom from users where username =:username and password =:password';
		$req = $bdd->prepare($sql);
		$req->execute(["username"=>$_POST['pseudo'], "password"=>$_POST['password']])
			or die(print_r($req->errorInfo()));
			if($data = $req->fetch()){
				$_SESSION["id"] = $data['id'];
				$_SESSION["username"] = $data['username'];
				$_SESSION['nom'] = $data['prenom'];
				$_SESSION['prenom'] = $data['nom'];
				header("location:acceuil.php");
			exit(0);
			}		
	}

	header("location:index.php");
?>
