<?php ob_start(); ?>

<div class="container">
    <h1 class='mb-5'>Votre compte Kindle</h1>
    
    <div class="row">
        <div class="col-12">
        

    <!-- NAVIGATION -->

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profil</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Emprunt</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Coordonnées bancaires-Mots de passe</a>
                </div>
            </nav>

            <div class="tab-content border" id="nav-tabContent">

                <!-- PANNEAU CARTE IDENTITE -->

            <div class="tab-pane fade show active mt-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                 <!-- PHOTO -->
                 <div class="col-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <img src="<?= $membre['photo'] ?>" class="card-img" alt="...">
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <table class="table">
                        <tbody>
                            <tr>
                            <th scope="row">Prénom</th>
                            <td><?= $membre['prenom'] ?></td>
                            <td><button class="btn btn-danger">Modifer</button></td>
                            </tr>

                            <tr>
                            <th scope="row">Nom</th>
                            <td><?= $membre['nom'] ?></td>
                            <td><button class="btn btn-danger">Modifer</button></td>
                            </tr>

                            <tr>
                            <th scope="row">Email</th>
                            <td><?= $membre['mail'] ?></td>
                            <td><button class="btn btn-danger">Modifer</button></td>
                            </tr>

                            <tr>
                            <th scope="row">Adresse</th>
                            <td><?= $membre['adresse']?></td>
                            <td><button class="btn btn-danger">Modifer</button></td>
                            </tr>

                            <tr>
                            <th scope="row">Ville</th>
                            <td><?= $membre['ville']?></td>
                            <td><button class="btn btn-danger">Modifer</button></td>
                            </tr>

                            <tr>
                            <th scope="row">Code Postal</th>    
                            <td><?= $membre['cp']?></td>
                            <td><button class="btn btn-danger">Modifer</button></td>
                            </tr>
                        <tbody>
                    </table>
                </div>

            </div>

                <!-- PANNEAU EMPRUNTS -->

            <div class="tab-pane fade border" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="col-6">
                    <table class="table">
                        <thead>
                        <th scope="row">Oeuvre</th>
                        <th scope="row">Date Emprunt</th>
                        <th scope="row">Nombres de Renouvellements</th>
                        <th scope="row">Renouveller</th>
                        </thead>

                        <tbody>
                            <tr>
                            <td><?= $emprunt['Titre']?> de <?= $emprunt['Auteur']?> </td>
                            <td><?= $emprunt['date_emprunt']?></td>
                            <td><?= $emprunt['renouvellement_emprunt']?></td>
                            <td><button class="btn btn-danger">Renouveller</button></td>
                            </tr>
                        <tbody>
                    </table>
                </div>

            </div>

                <!-- CARTE BANCAIRE - MOTS DE PASSE -->
            <div class="tab-pane fade mt-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                 <table class="table">
                     <tbody>       
                        <tr>
                            <th scope="row">Carte Bancaire</th>
                            <td><?= $membre['carte_bancaire']?></td>
                            <td><button class="btn btn-primary">Montrer</button></td>
                            <td><button class="btn btn-danger">Modifer</button></td>
                        </tr>

                        <tr>
                            <th scope="row">Mot de passe</th>    
                            <td><?= $membre['mot_de_Passe']?></td>
                            <td><button class="btn btn-primary">Montrer</button></td>
                            <td><button class="btn btn-danger">Modifier</button></td>
                        </tr>
                    <tbody>
                </table>
            </div>
        
        </div>
    </div>
</div>





<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>