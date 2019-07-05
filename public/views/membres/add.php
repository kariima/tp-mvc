<?php ob_start(); ?>


<h1>Ajouter un membre : </h1>

<div class="col-9">
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Photo</label>
        <div class="col-lg-6">
            <input class="form-control" name="photo" type="file" value="" placeholder="Photo">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
        <div class="col-lg-9">
            <input class="form-control" name="prenom" type="text" value="">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Nom</label>
        <div class="col-lg-9">
            <input class="form-control" name="nom" type="text" value="">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Email</label>
        <div class="col-lg-9">
            <input class="form-control" name="mail" type="email" value="">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Addresse</label>
        <div class="col-lg-9">
            <input class="form-control" name="adresse" type="text" value="" placeholder="">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Ville</label>
        <div class="col-lg-6">
            <input class="form-control" name="ville" type="text" value="" placeholder=" Ville">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Code postal</label>
        <div class="col-lg-6">
            <input class="form-control" name="cp" type="text" value="" placeholder="cp">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Carte bancaire</label>
        <div class="col-lg-6">
            <input class="form-control" name="carte bancaire" type="text" value="" placeholder="carte bancaire">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Mot de passe</label>
        <div class="col-lg-9">
            <input class="form-control" type="password" value="">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Confirmer mot de passe</label>
        <div class="col-lg-9">
            <input class="form-control" type="password" value="">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label"></label>
        <div class="col-lg-9">
            <input type="reset" class="btn btn-secondary" value="Supprimer">
            <input type="button" class="btn btn-primary" value="Sauvergarder">
        </div>
    </div>
</div>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>