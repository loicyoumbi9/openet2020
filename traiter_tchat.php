<?php 

include_once("connection_db.php");
    $id_dest = $_GET['id'];
    $id_source = $_SESSION['id'];
     $messages = 'SELECT * FROM message where (id_dest=:id_dest AND id_source =:id_source) or (id_dest=:id_source AND id_source =:id_dest) order by date_post DESC';
        $req = $bdd->prepare($messages);
        $req->execute(["id_dest"=>$id_dest, "id_source"=>$id_source])
            or die(print_r($req->errorInfo()));
        
        while ($donnees = $req->fetch()){
            
            if ($donnees['id_source'] == $id_source){
                $contacts = 'SELECT prenom, id  FROM users where id =:id';
                $req_source = $bdd->prepare($contacts);
                $req_source->execute(["id"=>$id_source])
                    or die(print_r($req_source->errorInfo()));
                if($data_source = $req_source->fetch()){ ?>
                    <div class="pub_r">
						<p id="sender">Vous</p>
						<nav class="content">
							<p id="contenu"><?=$donnees['contenu']?></p>
							<p id="date"><?=$donnees['date_post']?></p>
						</nav>
					</div>
                <?php } 
            }
            
            if($donnees['id_source'] == $id_dest){
                $contacts = 'SELECT prenom, id  FROM users where id =:id';
                $req_dest = $bdd->prepare($contacts);
                $req_dest->execute(["id"=>$id_dest])
                    or die(print_r($req_dest->errorInfo()));
                if($data_dest = $req_dest->fetch()){ ?>
                <div class="pub_s">
						<p id="sender"><?=$data_dest['prenom']?> </p>
						<div class="content">
                            <p id="contenu"><?=$donnees['contenu']?></p>
                            <p id="date"><?=$donnees['date_post']?></p>
						</div>
					</div>
                <?php } ?>
           
        <?php } ?>
        <?php }
        if( isset($_POST['texte']) && isset($id_source) && isset($id_dest)
        && !empty($_POST['texte']) && !empty($id_source) && !empty($id_source)
        ){
        //Requete sql à executer 
        $sql = 'insert into message (date_post, contenu, id_source, id_dest)'.
                'values(:date_post, :contenu, :id_source, :id_dest)'; 
        //Execution de la requete
        $req = $bdd->prepare($sql);
        $req->execute([
                        'date_post' =>  date("y-m-d H:i:s"),
                        'contenu' => $_POST['texte'],
                        'id_source'=>$id_source,
                        'id_dest'=>$id_dest,
                        ]) or die(print_r($req->errorInfo()));
        // donnees de l'utilisateur connecté
        $userConnecte = $bdd->query("select * from users where id = $id_source")->fetch();
        $_SESSION['id'] = $userConnecte['id'];
        $_SESSION['username'] = $userConnecte['username'];
        $_SESSION['nom'] = $userConnecte['nom'];
        $_SESSION['prenom'] = $userConnecte['prenom'];
        $userDest = $bdd->query("select id from users where id = $id_dest")->fetch();
        // les publications de l'utilisateur conecté
        $a = $userDest['id'];
            header("location:tchat.php?id=$a"); 
            exit(0);
        }
          
        ?>