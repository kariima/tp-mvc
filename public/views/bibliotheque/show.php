<?php ob_start(); ?>

<?php require 'header.php' ?>

<h1>Description livre : </h1>

<body>
    Titre : <?= ($_GET['titre']) ?>
    Couverture : <?= ($_GET['couverture']) ?>;
    Résumé : <?= ($_GET['resume']) ?>;
    Catégorie : <?= ($_GET['categorie']) ?>;
    Date de parution : <?= ($_GET['date_de_parution']) ?>;
    Prix : <?= ($_GET['prix']) ?>;
    Délai de retour : <?= ($_GET['delai']) ?>;


</body>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>