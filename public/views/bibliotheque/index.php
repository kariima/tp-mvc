<?php ob_start(); ?>


<body>
    <h1>Liste des livres</h1>
    <table>
        <tr>
            <th>Titre :</th>
            <th>Couverture :</th>
            <th>Auteur :</th>
        </tr>

        <tr>
            <td> <?= ($_GET['titre']) ?></td>
            <td> <?= ($_GET['couverture']) ?>;</td>
            <td> <?= ($_GET['auteur']) ?>;</td>
        </tr>
    </table>






    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>