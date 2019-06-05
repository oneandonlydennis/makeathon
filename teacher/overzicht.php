<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//require('../includes/autoloader.php');
?>
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
        <div class="registreren">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verwijderen'])) {
                if (User::deleteUser($_POST['verwijderen'])) {
                    // Succesvol verwijderd
                }
            }
            ?>
            <div class="card" id="graycard">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th style="width:20%;">Voornaam</th>
                            <th style="width:20%;">Achternaam</th>
                            <th style="width:10%;">Klas</th>
                            <th style="width:10%;">Acties</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $database = new Connection;
                        $db = $database->OpenVerbinding();

                        $gebruikers = $db->prepare('SELECT * FROM users WHERE role = "Leerling"');
                        $gebruikers->execute();

                        while ($row = $gebruikers->fetch(PDO::FETCH_ASSOC)) {
                            echo '
                            <tr>
                                <th scope = "row" > '. $row['username'] .'</th>
                                <td> '. $row['achternaam'] .'</td>
                                <td> '. $row['klas'] .'</td>
                                <td><form method="POST" style="display: inline-flex;"><button type="submit" class="btn btn-success">Bewerken</button><button name="verwijderen" value="'. $row['id'] .'" type="submit" class="btn btn-danger">Verwijderen</button></form></td>
                            </tr >';
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>