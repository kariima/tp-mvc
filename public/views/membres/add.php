<?php ob_start(); ?>


<h1>Ajouter un membre : </h1>

<form class="form-signin" method="post">
    <img class="mb-4" src="public/assets/img/kindlogo.png" alt="logo kindle" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Connectez-vous</h1>
    <label for="inputEmail" class="sr-only">E-mail</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="adresse email" required autofocus>
    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="mot de passe" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion </button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>


<div class="col-lg-4 pull-lg-8 text-xs-center">
    <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar">
    <h6 class="m-t-2">Ajouter une photo</h6>
    <label class="custom-file">
        <input type="file" id="file" class="custom-file-input">
        <span class="custom-file-control">Choisir un fichier</span>
    </label>
</div>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>