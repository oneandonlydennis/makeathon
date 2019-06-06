<!doctype html>
<html lang="en">
<head>
    <title>Docenten - Homepagina</title>
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
                                <th style="width:20%;">Leerstof</th>
                                <th>Datum</th>
                                <th style="width:10%;">Resultaat</th>
                                <th style="width:10%;">Acties</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $database = new Connection;
                            $db = $database->OpenVerbinding();

                            $resultaat = $db->prepare('SELECT * FROM activiteiten');
                            $resultaat->execute();

                            while ($row = $resultaat->fetch(PDO::FETCH_ASSOC)) {

                                $userinfo = $db->prepare('SELECT * FROM users WHERE id = :id');
                                $userinfo->execute(array(
                                    ':id' => $row['userid']
                                ));

                                while ($info = $userinfo->fetch(PDO::FETCH_ASSOC)) {

                                    echo '
                                    <tr>
                                        <th scope = "row" > ' . $info['username'] . ' ' . $info['achternaam'] . '</th>
                                        <td> ' . $row['leerstof'] . '</td>
                                        <td> ' . $row['datum'] . '</td>
                                        <td> ' . $row['score'] . '/20 Punten</td>
                                        <td><form method="POST" style="display: inline-flex;"><button type="submit" class="btn btn-success">Inzien</button><button name="verwijderen" value="' . $row['id'] . '" type="submit" class="btn btn-danger">Herkansen</button></form></td>
                                    </tr >';
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
</body>
</html>