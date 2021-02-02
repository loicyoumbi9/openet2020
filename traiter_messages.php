<?php
    include_once("connection_db.php");
    $b = $_SESSION['username'];
    $id_source = $_SESSION['id'] ;
    $messages = 'SELECT * FROM message where id_dest=:id_dest  order by date_post DESC';
    $req = $bdd->prepare($messages);
    $req->execute(["id_dest"=>$id_source])
        or die(print_r($req->errorInfo()));
        while ($donnees = $req->fetch()){
        
            $contacts = 'SELECT prenom, id  FROM users where id =:id';
                    $req1 = $bdd->prepare($contacts);
                    $req1->execute(["id"=>$donnees['id_source']])
                        or die(print_r($req1->errorInfo()));
        if($data = $req1->fetch()){ 
           $a = $data['id'] ;
        ?>
            <div class="pub">
                 
					<span id="sender">
                    <?php if($data['id'] == $_SESSION['id']){
                        echo 'Vous';
                    }else{echo $data['prenom'];}?></span>
                    
					<p id="contenu"><?= $donnees['contenu']?></p>
					<a href="tchat.php?<?="id=$a"?>" id="rep">Repondre</a>
				</div>
            <?php } ?>
            <?php }     
            ?> 
            



