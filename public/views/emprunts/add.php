<?php ob_start(); ?>

<?php require 'header.php' ?>

<h1>Emprunter un livre</h1>

<form class="form-rent" method="post">
    <h1 class="h2 mb-3 font-weight-normal">Add a book/h1>
        <input type="text" name="title" placeholder="Enter a title">
        <input type="text" name="author" placeholder="Enter an author">
        <select class="custom-select custom-select-sm">
            <option selected>Choose a genre</option>
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