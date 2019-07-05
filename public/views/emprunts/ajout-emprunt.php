<?php ob_start(); ?>


<h1>Emprunter un livre</h1>

<form class="form-rent" method="post">

    <select id="selectUserFromEmprunt" name="membre_id" class="form-control">
        <option value="" selected disabled>Choisir un user...</option>
        <?php foreach($membres as $membre) : ?>
            <option value="<?= $membre['id'] ?>"><?= $membre['prenom'] ?> <?= $membre['nom'] ?></option>
        <?php endforeach; ?>
    </select>
    
    <select id="selectGenreFromEmprunt" class="custom-select custom-select-sm" style="display:none">
        <option selected>Choisir un genre</option>
        <option value="Thriller">Thriller</option>
        <option value="Policier">Policier</option>
        <option value="Fantastique">Fantastique</option>
        <option value="Horreur">Horreur</option>
        <option value="Comédie">Comédie</option>
        <option value="Science-fiction">Science</option>
        <option value="Onirique">Onirique</option>
    </select>
</form>

<div id="resultsBooksByGenre">
</div>






<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>