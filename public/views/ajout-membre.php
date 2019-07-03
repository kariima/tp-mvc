<?php ob_start(); ?>

<?php require 'header.php' ?>

<h1>Ajouter un membre : </h1>

<form class="form-signin" method="post">
    <img class="mb-4" src="img/kindlogo.png" alt="logo kindle" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>





<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>