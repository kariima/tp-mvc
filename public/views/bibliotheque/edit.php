<?php ob_start(); ?>

<a href="<?= url('liste-bibliotheque') ?>" class="btn btn-danger btn-sm mb-2">Retour</a>

<form action="<?= url('ajout-bibliotheque') ?>" method="POST" class="form" enctype="multipart/form-data">

    <h1>Modifier une oeuvre</h1>

    <div class="form-group">
        <label for="">Titre</label>
        <input name="titre" type="text" class="form-control" value="<?= $bibliotheque->getTitre() ?>">
    </div>


    <div class="form-group">
        <label for="">Auteur</label>
        <input name="auteur" type="text" class="form-control" value="<?= $bibliotheque->getAuteur() ?>">
    </div>

    <div class="form-group">
        <label for="">Résumé</label>
        <input name="resume" type="text" class="form-control" value="<?= $bibliotheque->getRésumé() ?>">
    </div>

    <div class="form-group">
        <label for="">Genres</label>
        <select name="genre" id="" class="form-control">
            <option selected enabled>Choisir un genre... </option>

            <option value="Thriller" <?php echo ($bibliotheque->getGenre() == 'Thriller') ? 'selected' : ''  ?> >Thriller</option>
            <option value="Policier" <?php echo ($bibliotheque->getGenre() == 'Policier') ? 'selected' : ''  ?> >Policier</option>
            <option value="Fantastique" <?php echo ($bibliotheque->getGenre() == 'Fantastique') ? 'selected' : ''  ?> >Fantastique</option>
            <option value="Horreur" <?php echo ($bibliotheque->getGenre() == 'Horreur') ? 'selected' : ''  ?> >Horreur</option>
            <option value="Comédie" <?php echo ($bibliotheque->getGenre() == 'Comédie') ? 'selected' : ''  ?> >Comédie</option>
            <option value="Science" <?php echo ($bibliotheque->getGenre() == 'Science') ? 'selected' : ''  ?> >Science</option>
            <option value="Onirique" <?php echo ($bibliotheque->getGenre() == 'Onirique') ? 'selected' : ''  ?> >Onirique</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Catégorie</label>
        <input name="categorie" type="text" class="form-control" value="<?= $bibliotheque->getCatégorie() ?>">
    </div>

    <div class="form-group">
        <label for="">Délai</label>
        <input name="delai" type="text" class="form-control" value="<?= $bibliotheque->getDelai() ?>">
    </div>

    <div class="form-group">
        <label for="">Prix</label>
        <input name="prix" type="text" class="form-control" value="<?= $bibliotheque->getPrix() ?>">
    </div>

    <div class="form-group">
        <label for="">Date de parution</label>
        <input name="dateDeParution" type="date" class="form-control" value="<?= $bibliotheque->getDateDeParution() ?>">
    </div>

    <div class="form-group">
        <label for="">Couverture</label>
        <input name="couverture" type="file" class="form-control" value="<?= $bibliotheque->getCouverture() ?>">
    </div>

    <button class="btn btn-danger float-right">Ajouter un livre</button>



</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>