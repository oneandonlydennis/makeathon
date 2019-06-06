<?php
    //require("../includes/autoloader.php");
    require("../classes/class_student.php");
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

//                            echo $kid->checkAntwoorden($_POST);
                            if ($kid->checkAntwoorden($_POST)) {
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