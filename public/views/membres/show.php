<?php ob_start(); ?>



<div class="container">
    <h1 class='mb-5'>Votre compte Kindle</h1>
    
    <div class="row">
        <div class="col-12">

    <!-- NAVIGATION -->

            <ul class="nav nav-tabs bg-warning" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="ID_TAB" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Votre profil Kindle</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>

    <!-- TABLEAU -->
            <div class="tab-content" id="myTabContent">
                

                <!-- PANNEAU CARTE IDENTITE -->
                
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <!-- PHOTO -->
                    <div class="col-3">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <img src="VINDRA_MONOI.jpg" class="card-img" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                <th scope="row">Prénom</th>
                                <td><?= $membre['prenom'] ?></td>
                                </tr>

                                <tr>
                                <th scope="row">Nom</th>
                                <td><?= $membre['nom'] ?></td>
                                </tr>

                                <tr>
                                <th scope="row">Email</th>
                                <td><?= $membre['mail'] ?></td>
                                </tr>

                                <tr>
                                <th scope="row">Adresse</th>
                                <td><?= $membre['adresse']?></td>
                                </tr>

                                <tr>
                                <th scope="row">Ville</th>
                                <td><?= $membre['ville']?></td>
                                </tr>

                                <tr>
                                <th scope="row">Code Postal</th>    
                                <td><?= $membre['cp']?></td>
                                </tr>
                            <tbody>
                        </table>
                    </div>
                </div>

            </div>

                <!-- TABLEAU EMPRUNT -->

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p>lalala</p>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <p>lalala</p>
            </div>


        <!-- TABLEAU COORDONEES BANCAIRES -->

        </div>
    </div>
</div>




<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>