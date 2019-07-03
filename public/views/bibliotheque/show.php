<?php ob_start(); ?>

<?php require 'header.php' ?>

<h1>Description livre : </h1>

<body>
    Titre : <?= ($_GET['titre']) ?>
    Couverture : <?= ($_GET['couverture']) ?>;
    Résumé : <?= ($_GET['résumé']) ?>;
    Catégorie : <?= ($_GET['catégorie']) ?>;
    Prix : <?= ($_GET['prix']) ?>;
    Délai de retour : <?= ($_GET['délai']) ?>;


</body>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>