<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('../includes/autoloader.php');
?>
<!doctype html>
<html lang="en">
<head>
    <title>Docenten - Registreren</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav.css">
</head>
<body>
<?php
require('nav.php');
?>
<div class="section">
    <div class="container">
        <div class="registreren">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aanmaken'])) {
                if (!empty($_POST['voornaam']) && !empty($_POST['achternaam']) && !empty($_POST['wachtwoord']) && !empty($_POST['klas'])) {
                    if (User::registreren($_POST['voornaam'], $_POST['achternaam'], $_POST['wachtwoord'], $_POST['klas'])) {
                        echo 'gelukt';
                    }
                }
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="Voornaam">Voornaam</label>
                            <input name="voornaam" type="text" class="form-control"placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="Achternaam">Achternaam</label>
                            <input name="achternaam" type="text" class="form-control"placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="Wachtwoord">Wachtwoord</label>
                            <input name="wachtwoord" type="password" class="form-control"placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="Groep">Klas</label>
                            <select name="klas" class="form-control">
                                <option value="Groep 3">Groep 3</option>
                                <option value="Groep 4">Groep 4</option>
                            </select>
                        </div>
                        <button type="submit" name="aanmaken" class="btn btn-block btn-success">Aanmaken</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/bootstrap.js"></script>
</body>
</html>