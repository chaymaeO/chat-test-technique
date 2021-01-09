
<form class="form-signin needs-validation" method="post" action="/register/register" novalidate oninput='passwordConfirmation.setCustomValidity(passwordConfirmation.value !== password.value ? "Passwords do not match." : "")'>
    <h1 class="text-center">Sign Up</h1>
    <div class="mb-3">
        <label for="username">Username</label>
        <div class="input-group">
            <input name="username" type="text" class="form-control" id="username" placeholder="Identifiant" required>
            <div class="invalid-feedback" style="width: 100%;">
                Le pseudo est obligatoire.
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe" required>
        <div class="invalid-feedback">
            Le mot de passe est obligatoire.
        </div>
    </div>
    
    <div class="mb-3">
        <label for="passwordConfirmation">Password</label>
        <input name="passwordConfirmation" type="password" class="form-control" id="passwordConfirmation" placeholder="confirmer votre Mot de passe" required>
        <div class="invalid-feedback">
            La confirmation du mot de passe est obligatoire.
        </div>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">S'incrire</button>
    <?php
    if (!empty(\App\Core\Session::exists('register.errors'))) {
        echo '<p class="text-danger text-center">'.\App\Core\Session::flash('register.errors').'</p>';
    }
    ?>
   
</form>


