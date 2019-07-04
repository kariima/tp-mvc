<?php ob_start(); ?>


<h1>Emprunter un livre</h1>

<form class="form-rent" method="post">
    <h1 class="h2 mb-3 font-weight-normal">Ajouter un livre</h1>
        <input type="text" name="titre" placeholder="Taper un titre">
        <input type="text" name="auteur" placeholder="Taper un auteur">
        <select class="custom-select custom-select-sm">
            <option selected>Choisir un genre</option>
            <option value="1">Thriller</option>
            <option value="2">Policier</option>
            <option value="3">Fantastique</option>
            <option value="4">Horreur</option>
            <option value="5">Comédie</option>
            <option value="6">Science</option>
            <option value="7">Onirique</option>
        </select>
</form>









<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>