<?php
require('includes/autoloader.php');
if (!User::loggedinUser()) {
    // Persoon is niet ingelogd
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['aanmelden'])) {
        if ($user = User::checkUser($_POST['username'])) {
            if ($user->login($_POST['password'])) {
                $_SESSION['id'] = $user->data('id');
                // Succesvol ingelogd
            } else {
                // Wachtwoord komt niet overeen
            }
        } else {
            // Gebruikersnaam bestaat niet
        }
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Rekenmaatje</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="card" id="landingcard">
            <div class="card-body">
                <?php
                if (isset($_SESSION['id'])) {
                        //Activeer pas zodra je ingelogd bent
                        include("includes/home.php");
                } else {

                echo '
                <form method="POST">
                    <div class="form-group">
                        <label for="username">Leerlingnaam: </label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Vraag je leraar om hulp als je er niet uit komt.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord: </label>
                        <input type="text"
                            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Vraag je leraar om hulp als je er niet uit komt.</small>
                    </div>
                    <button type="submit" name="aanmelden" id="submit" class="btn btn-primary btn-lg btn-block">Log in!</button>
                </form>';
                }
                ?>
            </div>
        </div>
    </body>
</html>