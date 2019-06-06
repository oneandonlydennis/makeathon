<?php
require('classes/class_user.php');
require('classes/class_student.php');
require('includes/database.php');
require('includes/autoloader.php');
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
    <?php
        $errormsg = "";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['aanmelden'])) {
                if ($user = User::checkUser($_POST['username'])) {
                    if ($user->login($_POST['password'])) {
                        $_SESSION['id'] = $user->data('id');
                    } else {
                        $errormsg = '<div class="alert alert-danger" id="wrongpass">Je hebt het verkeerde wachtwoord ingevoerd!</div>';
                    }
                } else {
                    $errormsg = '<div class="alert alert-danger" id="wrongpass">Je hebt de verkeerde gebruikersnaam ingevoerd!</div>';
                }
            }
        }
        ?>
    <div class="card" id="landingcard">
                <div class="card-body">
        
        <?php
        if (isset($_SESSION['id'])) {
                //Activeer pas zodra je ingelogd bent
                include("includes/home.php");
        } else {

            echo '
                    <form method="POST">
                        '.$errormsg.'
                        <div class="form-group">
                            <label for="username">Leerlingnaam: </label>
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Vraag je leraar om hulp als je er niet uit komt.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Wachtwoord: </label>
                            <input type="password"
                                class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Vraag je leraar om hulp als je er niet uit komt.</small>
                        </div>
                        <button type="submit" name="aanmelden" id="submit" class="btn btn-primary btn-lg btn-block">Log in!</button>
                    </form>
                ';
        }
        ?></div>
        </div>