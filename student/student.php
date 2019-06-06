<?php
require('../classes/class_user.php');
require('../classes/class_student.php');
require('../includes/database.php');
require('../includes/autoloader.php');
if (!User::loggedinUser()) {
    header('Location: http://rekenmaatje.nl/index.php');
    exit;
}

if (isset($_POST['afmelden'])) {
    $user->logout();
}
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
        <div class="card" id="studentcard">
            <?php
            if (Student::checkMarked() != true) {
                echo '
                    <img src = "../img/student.png" alt = "Student" class="studentimg" >
                <div class="card-body" >
                    <p class="card-text" > Welkom bij Rekenmaatje!DÉ plek om te oefenen met je rekensommen!Wanneer je op de knop hieronder klikt, begin je met de eerste oefeningen . Deze moet je allemaal invullen voordat je doorgaat naar het volgende gedeelte . Als je een antwoord niet weet, mag je hem leeg laten . Veel succes!</p>
                    <a href = "sommen.php" type = "submit" class="btn btn-primary btn-lg btn-block" > Begin met de toets!</a>
                </div>';
            } else {
                echo '
                    <img src = "../img/warning.png" alt = "Student" class="studentimg" >
                <div class="card-body" >
                    <p class="card-text" > Er zijn momenteel geen toetsen voor jouw beschikbaar, probeer het later nogmaals!</p>
                    <form method="post"><button name="afmelden" type = "submit" class="btn btn-primary btn-lg btn-block" > Afmelden</button></form>
                </div>';
            }
            ?>
        </div>
    </body>
</html>