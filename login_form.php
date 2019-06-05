<div class="row">
  <div class="col-12">
    <h1>inloggen</h1>
  </div>
</div>
<div class="row">
    <div class="col-6">
    <!-- Formulier -->
        <form action="./index.php?content=login_script" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail aderes</label>
                <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="voer uw e-mailaderes in">
            </div>
            <div class="form-group">
                <label for="InputPassword1">Wachtword</label>
                <input name="password" type="password" class="form-control" id="InputPassword1" placeholder="voer uw wachtwoord in">
                <small id="PasswordHelp" class="form-text text-muted">Let op het wachtwoord kan maximaal 72 karakters bevatten</small>
            </div>
            <button type="submit" class="btn btn-primary btn-block">login</button>
        </form>
    </div>
    <!-- Plaatje -->
    <div class="col-6"> 
        <img src="./img/slot.png" class="img-fluid rounded mx-auto d-block" alt="registreer je">
    </div>
</div>