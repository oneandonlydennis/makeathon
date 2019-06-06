<?php
    session_start();
    require("../classes/class_student.php");

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

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
<!--                    <div class="row">-->
                    <?php
                        $kid = new Student;
                        $kid->arrayresult();
                    ?>
<!--                    </div>-->
                    <button name="berekenen" type="submit" class="btn btn-primary">Klik hier om je toets in te leveren</button>
                </form>
            </div>
        </div>
    </body>
</html>