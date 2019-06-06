<?php
    //require("../includes/autoloader.php");
    require("../classes/class_student.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/sommen.css">

        <script type="text/javascript">
            function checkanswers(){
                alert('check');
            }
        </script>
    </head>
    <body>
        <div class="card" id="studentcard">
            <div class="card-body" id="sums">
            <form method="POST">
                    <?php
                        $kid = new Student;
                        if(isset($_POST['berekenen'])){
                            $kid->arrayresult();
                        }
                    ?>
                    <button name="berekenen" type="button" onclick="checkanswers()" class="btn btn-primary">Klik hier om je toets in te leveren</button>
                </form>
            </div>
        </div>
    </body>
</html>