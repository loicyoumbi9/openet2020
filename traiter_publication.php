<?php
    include_once("connection_db.php");
    session_start();
    $a = $_SESSION['username'];
    $id_source = $_SESSION['id'] ;
    
    if( isset($_POST['texte']) && isset($id_source)
        && !empty($_POST['texte']) && !empty($id_source)
    ){
        //Requete sql à executer 
        $sql = 'insert into publication(date_post, contenu, id_source)'.
                'values(:date_post, :contenu, :id_source)'; 
        //Execution de la requete
        $req = $bdd->prepare($sql);
        $req->execute([
                        'date_post' =>  date("y-m-d H:i:s"),
                        'contenu' => $_POST['texte'],
                        'id_source'=>$id_source,
                        ]) or die(print_r($req->errorInfo()));
        // donnees de l'utilisateur connecté
        $userConnecte = $bdd->query("select * from users where id = $id_source")->fetch();
        $_SESSION['id'] = $userConnecte['id'];
        $_SESSION['username'] = $userConnecte['username'];
        $_SESSION['nom'] = $userConnecte['nom'];
        $_SESSION['prenom'] = $userConnecte['prenom'];
        // les publications de l'utilisateur conecté
            header("location:acceuil.php"); 
			exit(0);
    }else{ 
        header("location:messages.php");
    }
?>