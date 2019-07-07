<?php ob_start(); ?>


<body>
    <h1>Liste bibliothèque :</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th class="card-header">Livre</th>
                <th class="card-header">Membre</th>
                <th class="card-header">Note</th>
                <th class="card-header">Commentaire</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($review as $r) : ?>
                <tr class="card-body mt-2">
                    <td class="card-text m-2"><a href="<?= url('oeuvre-individuelle/' . $b['id']) ?>"><?= $b['titre'] ?></a></td>
                    <td class="card-text m-2"><?= $b['couverture'] ?></td>
                    <td class="card-text m-2"><?= $b['auteur'] ?></td>
                    <td class="card-text m-2"><?= substr($b['resume'], 0, 30) . "..." ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?= url('ajout-bibliotheque') ?>" class="btn btn-danger btn-sm mb-2">Ajouter une oeuvre</a>



    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>