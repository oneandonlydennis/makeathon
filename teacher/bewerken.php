<!doctype html>
<html lang="en">
<head>
    <title>Docenten - Overzicht</title>
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
    <div class="container-fluid">
        <div class="card" id="graycard">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bijwerken'])) {
                    if (User::bijwerken($_GET['id'], $_POST['username'], $_POST['achternaam'], $_POST['klas'])){
                        echo '<div class="alert alert-success" id="edited">De gebruiker is succesvol bijgewerkt!</div>';
                    }
                }
            ?>
            <form method="post">
                <div class="form-group">
                  <label for="username">Voornaam</label>
                  <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="achternaam">achternaam</label>
                  <input type="text" class="form-control" name="achternaam" id="achternaam" value="" aria-describedby="helpId" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="Groep">Klas</label>
                    <select name="klas" class="form-control">
                        <option value="Groep 3">Groep 3</option>
                        <option value="Groep 4">Groep 4</option>
                    </select>
                </div>
                <button type="submit" name="bijwerken" class="btn btn-block btn-success">Werk bij</button>
            </form>
        </div>
    </div>
</div>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>