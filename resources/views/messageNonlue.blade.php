<?php
// Connexion à la base de données
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=zaho', 'root', '');

	} catch(Exception $e) {
		die('Erreur: '.$e->getMessage());

	}$bdd->query("SET NAMES UTF8");


    $req = $bdd->query("SELECT * FROM contacts where show1 = 0");

    while ($data = $req->fetch()) {

        echo '<a href="/detailMessage/'.$data['id'].'" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">'.$data['name'].'</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">'.$data['email'].'</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> '.$data['created_at'].'</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>';

    }





?>
