<?php
    session_start();
    include_once("connection_db.php");
    $o= $_POST['annee'];
        echo var_dump($o);
    if( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pseudo'])
        && isset($_POST['pass']) && isset($_POST['sexe']) && isset($_POST['jour'])
        && isset($_POST['mois']) && isset($_POST['annee']) && isset($_POST['ville'])
        && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pseudo'])
        && !empty($_POST['pass']) && !empty($_POST['sexe']) && !empty($_POST['jour'])
        && !empty($_POST['mois']) && !empty($_POST['annee']) && !empty($_POST['ville'])
    ){
        //Requete sql à executer
       $sql = 'insert into users(nom , prenom, username, password, sexe, date_naissance, ville)'.
            'values(:nom, :prenom, :pseudo, :password, :sexe, :date_naissance, :ville)';
        //Execution de la requete
        $req = $bdd->prepare($sql);
        $req->execute([
                        'nom' => $_POST['nom'],
                        'prenom' => $_POST['prenom'],
                        'pseudo'=>$_POST['pseudo'],
                        'password' => $_POST['pass'],
                        'sexe' => $_POST['sexe'],
                        'date_naissance' => $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'],
                        'ville' => $_POST['ville'],
                        ]) or die(print_r($req->errorInfo()));
        $userId = $bdd->query("select max(id) as id from users")->fetch();
        $_SESSION['id'] = $userId['id'];
        $_SESSION['username'] = $_POST['pseudo'];
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];

        header("location:acceuil.php");
			exit(0);
    }else{
        header("location:messages.php",$_POST['prenom']);
    }
?>