<?php
require('../classes/class_user.php');
require('../classes/class_student.php');
require('../includes/database.php');
require('../includes/autoloader.php');
if (!User::loggedinUser()) {
    header('Location: http://rekenmaatje.nl/index.php');
    exit;
}
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/sommen.css">

    </head>
    <body>
        <div class="card" id="studentcard">
            <div class="card-body" id="sums">
            <form method="POST">
                    <?php
                        $kid = new Student;
                        $kid->GetMultiply();
                        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['berekenen'])){

                            if ($kid->checkAntwoorden()) {
                                $kid->checkBeoordeling();
                            }
                        }
                    ?>
                    <button name="berekenen" type="submit" class="btn btn-primary">Klik hier om je toets in te leveren</button>
                </form>
            </div>
        </div>
    </body>
</html>