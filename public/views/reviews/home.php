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
                    <td class="card-text m-2"><?= $r->getLivre()['titre'] ?></td>
                    <td class="card-text m-2"><?= $r->getMembre()['prenom']?> <?= $r->getMembre()['nom'] ?></td>
                    <td class="card-text m-2"><?= $r['note'] ?></td>
                    <td class="card-text m-2"><?= substr($r['commentaire'], 0, 30) . "..." ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>




    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>