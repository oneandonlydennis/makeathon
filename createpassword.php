<div class='row'>
    <div class="col-12">
        <h1>wachtwoord</h1>
    </div>
        <div class='col-6'>
            <form action="./index.php?content=createpassword_script" method="post">
            <div class="form-group">
                <label for="exampleInputPassword1">Voer een wachtwoord in</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="wachtwoord" required name="password">
                <small id="PasswordHelp" class="form-text text-muted">Let op het wachtwoord kan maximaal 72 karakters bevatten</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Bevestig het wachtwoord</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="bevestig" required name="checkpassword">
                <small id="PasswordHelp" class="form-text text-muted">Let op het wachtwoord kan maximaal 72 karakters bevatten</small>
            </div>
            <input type="hidden" value="<?php echo $_GET["id"]; ?>" name="id">
            <input type="hidden" value="<?php echo $_GET["pw"]; ?>" name="pw">
            <button type="submit" class="btn btn-primary btn-block">sla op</button>
            </form>
        </div>
        <div class='col-6'>
            <!-- Plaatje -->
            <img src="./img/slot.png" class="img-fluid rounded mx-auto d-block" alt="registreer je">
        </div>
        <div class='col-6'>
            
        </div>
</div>