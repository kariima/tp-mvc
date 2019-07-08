<?php ob_start(); ?>

<a href="<?= url('liste-bibliotheque') ?>" class="btn btn-danger btn-sm mb-2">Retour</a>

<h1>Laisser un commentaire sur un livre</h1>

<form class="form-rent" method="post">

    <div class="form-group">
        <select name="membre_id" class="form-control">
            <option value="" selected disabled>Qui êtes-vous ?</option>
            <?php foreach($review as $r) : ?>
                <option value="<?= $r->getMembre()['id']?>"><?= $r->getMembre()['prenom']?> <?= $r->getMembre()['nom'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <select class="custom-select custom-select-sm">
            <option value="" selected disabled>Quel livre souhaitez-vous critiquer ?</option>
                <?php foreach($review as $r): ?>
                    <option value="<?= $r->getLivre()['id'] ?>"><?= $r->getLivre()['titre'] ?></option>
                <?php endforeach; ?>
        </select>
    </div>

    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" name="note" value="1" class="mr-2"> 1
            </div>
        </div>

        <div class="input-group-prepend">
            <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" name="note" value="2" class="mr-2"> 2
            </div>
        </div>

        <div class="input-group-prepend">
            <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" name="note" value="3" class="mr-2"> 3
            </div>
        </div>

        <div class="input-group-prepend">
            <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" name="note" value="4" class="mr-2"> 4
            </div>
        </div>

        <div class="input-group-prepend">
            <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" name="note" value="5" class="mr-2"> 5
            </div>
        </div>
    </div>


    <div class="form-group mt-3">
        <textarea name="commentaire" cols="50" rows="10" placeholder="Taper votre commentaire"></textarea>
    </div>

    <a href="<?= url('ajout-review') ?>" class="btn btn-danger btn-sm mb-2">publier un commentaire</a>
</form>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>