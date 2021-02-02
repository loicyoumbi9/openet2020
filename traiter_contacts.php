<?php
include_once("connection_db.php");

                        $contacts = array();
                        $a = $_SESSION['id'];
                        $contacts = 'SELECT prenom, id  FROM users where id not like :id ';
                        $req = $bdd->prepare($contacts);
                        $req->execute(["id"=>$a])
                            or die(print_r($req->errorInfo()));
                        while ($data = $req->fetch()){
                            $a = $data['id'];
                            ?>
                            <div class="pub">
                                <p id="contenu"><?= $data['prenom']?></p>
                                <a href="tchat.php?<?="id=$a"?>" id="date">écrire</a>
                            </div>
                            <?php } ?> 
