<?php ob_start(); ?>


<h1>Description de l'oeuvre : </h1>

<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-12">

                <a href="<?= url('liste-bibliotheque') ?>" class="btn btn-primary btn-sm mb-2">
                    < Retour</a> <div class="card">
                        <div class="card-header"><?= $bibliotheque->getTitre() ?> <?= $bibliotheque->getCouverture() ?></div>

                        <div class="card-body">
                            <ul>
                                <li>Résumé : <?= $bibliotheque->getRésumé() ?></li>
                                <li>Catégorie : <?= $bibliotheque->getCatégorie() ?></li>
                                <li>Date de parution : <?= $bibliotheque->getDateDeParution() ?></li>
                                <li>Prix : <?= $bibliotheque->getPrix() ?></li>
                                <li>Délai de location maximum : <?= $bibliotheque->getDelai() ?></li>
                            </ul>
                        </div>
            </div>
            <a href="<?= url('oeuvre-individuelle/' . $bibliotheque->getId() . '/edit') ?>" type="submit" class="btn btn-danger">Modifier</a>

            <a href="<?= url('oeuvre-individuelle/' . $bibliotheque->getId() . '/delete') ?>" type="submit" class="btn btn-danger">Supprimer</a>

        </div>
    </div>
    </div>

</body>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>