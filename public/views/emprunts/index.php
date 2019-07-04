<?php ob_start(); ?>


<body>
    <h1>Liste des emprunts</h1>
    <table>
        <tr>
            <th>Livre :</th>
            <th>Lecteur :</th>
            <th>Date d'emprunt :</th>
        </tr>

        <tr>
            <td> <?= ($_GET['article-id']) ?></td>
            <td> <?= ($_GET['lecteur-id']) ?>;</td>
            <td> <?= ($_GET['date_emprunt']) ?>;</td>
        </tr>
    </table>






    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>