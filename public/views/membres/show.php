<?php ob_start(); ?>

<h1>Profil de l'utilisateur : </h1>

<div class="container">
    <div class="row m-y-2">
        <div class="col-lg-8 push-lg-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Compte</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Modifier</a>
                </li>
            </ul>

            <input type="checkbox" class="form-check-input" id="renouvellement">
            <label class="form-check-label" for="renouvellement">Cocher pour renouveller</label>
            <div class="tab-pane" id="edit">
                <h4 class="m-y-2">Modifier informations</h4>
                <form role="form">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Photo</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="photo" type="text" value="<?php ($_GET['photo']) ?>" placeholder="Photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="prenom" type="text" value="<?php ($_GET['prenom']) ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="nom" type="text" value="<?php ($_GET['nom']) ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="mail" type="email" value="<?php ($_GET['mail']) ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Addresse</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="adresse" type="text" value="" placeholder="adresse">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Ville</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="ville" type="text" value="<?php ($_GET['ville']) ?>" placeholder="Ville">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Code postal</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="cp" type="text" value="<?php ($_GET['cp']) ?>" placeholder="cp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Carte bancaire</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="carte bancaire" type="text" value="<?php ($_GET['carte bancaire']) ?>" placeholder="carte bancaire">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Pseudo</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="">
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
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4 pull-lg-8 text-xs-center">
        <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar">
        <h6 class="m-t-2">Ajouter une photo</h6>
        <label class="custom-file">
            <input type="file" id="file" class="custom-file-input">
            <span class="custom-file-control">Choisir un fichier</span>
        </label>
    </div>
</div>
</div>
<hr>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>