<?php 
    include("./connect_db.php");
    include("./function.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    $sql = "SELECT * FROM  `login` WHERE `email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1){
        //inloggen
        $record = mysqli_fetch_assoc($result);
        $blowfish_password = $record["password"];

        if ( password_verify($password, $blowfish_password)) {

            $_SESSION["id"] = $record["password"];
            $_SESSION["email"] = $email;
            $_SESSION["userrole"] = $record["userrole"];
            
            switch ($record["userrole"]){
                case 'influencer':
                    echo '<div class="alert alert-success" role="alert">Uw bent ingelogd als influencer en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=influencer_home");
                break;
                case 'translator':
                    echo '<div class="alert alert-success" role="alert">Uw bent ingelogd als translator en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=translator_home");
                break;
                case 'customer':
                    echo '<div class="alert alert-success" role="alert">Uw bent ingelogd en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=cusomer_home");
                break;
                case 'admin':
                    echo '<div class="alert alert-success" role="alert">Uw bent ingelogd als administrator en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=admin_home");
                break;
                case 'moderator':
                    echo '<div class="alert alert-success" role="alert">Uw bent ingelogd als moderator en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=moderator_home");
                break;
                case 'root':
                    echo '<div class="alert alert-success" role="alert">Uw bent ingelogd als root en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=root_home");
                break;
                default:
                    echo '<div class="alert alert-success" role="alert">Uw bent ingelogd maar uw rol bestaat niet en word nu doorgestuurd</div>';
                    header("Refresh: 3; ./index.php?content=home");
                break;
            }
          } else {
            // E-mailadres is niet bekend in database, terugsturen naar het inlogformulier
            echo '<div class="alert alert-danger" role="alert">Uw wachtwoord is niet correct, probeer het nogmaals</div>';
            header("Refresh: 2; url=./index.php?content=login_form");
          }

    } else{
        echo '<div class="alert alert-danger" role="alert">Het ingevoerde e-mailaderes is niet bekent probeer opnieuw</div>';
        header("Refresh: 4; url=./index.php?content=login_form");
    }
?> 