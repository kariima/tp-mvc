<?php ob_start(); ?>


<body>
    <h1>Liste bibliothèque :</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th class="card-header">Titre</th>
                <th class="card-header">Couverture </th>
                <th class="card-header">Auteur </th>
                <th class="card-header">Résumé </th>
                <th class="card-header">Catégorie </th>
                <th class="card-header">Genre </th>
                <th class="card-header">Délai </th>
                <th class="card-header">Prix </th>
                <th class="card-header">Date de parution </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bibliotheque as $b) : ?>
                <tr class="card-body mt-2">
                    <td class="card-text m-2"><a href="<?= url('oeuvre-individuelle/' . $b['id']) ?>"><?= $b['titre'] ?></a></td>
                    <td class="card-text m-2"><?= $b['couverture'] ?></td>
                    <td class="card-text m-2"><?= $b['auteur'] ?></td>
                    <td class="card-text m-2"><?= substr($b['resume'], 0, 30) . "..." ?></td>
                    <td class="card-text m-2"><?= $b['categorie'] ?></td>
                    <td class="card-text m-2"><?= $b['genre'] ?></td>
                    <td class="card-text m-2"><?= $b['delai'] ?></td>
                    <td class="card-text m-2"><?= $b['prix'] ?></td>
                    <td class="card-text m-2"><?= $b['date_de_parution'] ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?= url('ajout-bibliotheque') ?>" class="btn btn-danger btn-sm mb-2">Ajouter une oeuvre</a>



    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>