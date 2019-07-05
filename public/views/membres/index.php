<?php ob_start(); ?>


<body>
    <h1>Liste des membres :</h1>
    <table>
        <tr class="m-2">
            <th class="card-header">Photo </th>
            <th class="card-header">Nom </th>
            <th class="card-header">Prénom </th>
            <th class="card-header">Email </th>
        </tr>



        <?php foreach ($membres as $m) : ?>
            <tr class="card-body mt-2 text-center">
                <td class="card-text m-2"><?= $m['photo'] ?></td>
                <td class="card-text m-2"><?= $m['nom'] ?></td>
                <td class="card-text m-2"><?= $m['prenom'] ?></td>
                <td class="card-text m-2"><a href="<?= url('profil-membre/' . $m['id'] ) ?>"><?= $m['mail'] ?></a></td>
            </tr>


        <?php endforeach; ?>
    </table>






    <?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>