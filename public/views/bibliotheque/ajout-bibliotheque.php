<?php ob_start(); ?>

<a href="<?= url('liste-bibliotheque') ?>" class="btn btn-danger btn-sm mb-2">Retour</a>

<form action="<?= url('ajout-bibliotheque') ?>" method="POST" class="form" enctype="multipart/form-data">

    <h1>Ajouter une nouvelle oeuvre</h1>

    <div class="form-group">
        <label for="">Titre</label>
        <input name="titre" type="text" class="form-control">
    </div>


    <div class="form-group">
        <label for="">Auteur</label>
        <input name="auteur" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Résumé</label>
        <input name="resume" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Genres</label>
        <select name="genre" id="" class="form-control">
            <option selected enabled>Choisir un genre... </option>

            <option value="Thriller">Thriller</option>
            <option value="Policier">Policier</option>
            <option value="Fantastique">Fantastique</option>
            <option value="Horreur">Horreur</option>
            <option value="Comédie">Comédie</option>
            <option value="Science">Science</option>
            <option value="Onirique">Onirique</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Catégorie</label>
        <input name="categorie" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Délai</label>
        <input name="delai" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Prix</label>
        <input name="prix" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Date de parution</label>
        <input name="dateDeParution" type="date" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Couverture</label>
        <input name="couverture" type="file" class="form-control">
    </div>

    <button class="btn btn-danger float-right">Ajouter un livre</button>



</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>