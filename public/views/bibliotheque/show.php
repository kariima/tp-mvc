<?php ob_start(); ?>


<h1>Description de l'oeuvre : </h1>

<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-12">

                <a href="<?= url('liste-bibliotheque') ?>" class="btn btn-primary btn-sm mb-2">
                    < Retour</a> <div class="card">
                        <div class="card-header"><?= $bibliotheque['titre'] ?> <?= $bibliotheque['couverture'] ?></div>

                        <div class="card-body">
                            <ul>
                                <li>Résumé : <?= $bibliotheque['resume'] ?></li>
                                <li>Catégorie : <?= $bibliotheque['categorie'] ?></li>
                                <li>Date de parution : <?= $bibliotheque['date_de_parution'] ?></li>
                                <li>Prix : <?= $bibliotheque['prix'] ?></li>
                                <li>Délai de location maximum : <?= $bibliotheque['delai'] ?></li>
                            </ul>
                        </div>
            </div>

        </div>
    </div>
    </div>

</body>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>