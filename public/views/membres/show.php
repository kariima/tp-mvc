<?php ob_start(); ?>

<h1>Votre compte Kindle </h1>

<div class="container">
    <div class="row">
        <div class="col-12">
            
            <div class="tab-pane" id="edit">
                <h4 class="m-y-2">Modifier informations</h4>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Photo</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="photo" type="text" value="<?= $membre['photo'] ?>" placeholder="Photo">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="prenom" type="text" value="<?= $membre['prenom'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="nom" type="text" value="<?= $membre['Nom'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="mail" type="email" value="<?= $membre['mail'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Addresse</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="adresse" type="text" value="" placeholder="<?= $membre['adresse']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Ville</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="ville" type="text" value="<?= $membre['Ville']?>"" placeholder="Ville">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Code postal</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="cp" type="text" value="<?= $membre['cp']?>" placeholder="cp">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Carte bancaire</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="carte bancaire" type="text" value="<?= $membre['cp']?>" placeholder="carte bancaire">
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

</div>
</div>
<hr>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>