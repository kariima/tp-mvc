<?php ob_start(); ?>


<body>
    <h1>Liste des uilisateurs</h1>
    <table>
        <tr>
            <th>Photo :</th>
            <th>Nom</th>
            <th>Prénom :</th>
            <th>Email :</th>
        </tr>

        <tr>
            <td> <?= ($_GET['photo']) ?></td>
            <td> <?= ($_GET['nom']) ?>;</td>
            <td> <?= ($_GET['prénom']) ?>;</td>
            <td> <?= ($_GET['email']) ?>;</td>
        </tr>
    </table>






    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>