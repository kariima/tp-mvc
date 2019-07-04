<?php ob_start(); ?>

<a href="<?php url('bibliotheque/index')?>" class="btn btn-danger btn-sm mb-2">Retour</a>

<form action="add" method="POST" class="form">

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
    <label for="">Genres</label>
        <select name="genre" id="" class="form-control">
        <option selected disabled >Choisir un genre... </option>
            <?php foreach ($Genres as $Genre) : ?>
                <option value="<?= $Genre['id']?>"><?= $Genre['genre']?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button class="btn btn-danger float-right">Ajouter un livre</button>

    

</form>

<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>