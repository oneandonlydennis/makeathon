<?php
    //require("../includes/autoloader.php");
    require("../classes/class_student.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
        <div class="card" id="studentcard">
            <div class="card-body" id="sums">
                <form method="post">
                    <?php
                        $kid = new Student;
                    ?>
                <button type="submit" class="btn btn-primary">Bereken!</button>
                </form>
            </div>
        </div>
    </body>
</html>