<?php ob_start(); ?>


<body>
    <h1>Liste des emprunts</h1>
    <table class="table col-12">
        <tr>
            <thead class="thead-dark text-center">
                <th>Livre :</th>
                <th>Lecteur :</th>
                <th>Date d'emprunt :</th>
        </tr>
        <?php foreach ($emprunts as $emprunt) : ?>
            <tr>
                <tbody class="tbody-light text-center">
                    <td> <?= ($emprunt['article_id']) ?></td>
                    <td> <?= ( $emprunt['lecteur_id']) ?>;</td>
                    <td> <?= ( $emprunt['date_emprunt']) ?>;</td>
            </tr>

        <?php endforeach; ?>
    </table>






    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>