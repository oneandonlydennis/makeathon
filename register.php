<?php
  include("./connect_db.php");

  $email = $_POST["email"];
  // include("./functions.php");
  // $email = sanitize($_POST["email"]);

  if ( empty($_POST["email"])) {
    echo '<div class="alert alert-warning" role="alert">U heeft geen e-mailadres ingevoerd. Dit is een verplicht veld. Probeer het nogmaals</div>';
    header("Refresh: 3; url=./index.php?content=register_form");
  } else {
    $sql = "SELECT * FROM `login` WHERE `email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result) == 1 ) {
      echo '<div class="alert alert-info" role="alert">Het door u ingevoerde e-mailadres bestaat al. Kies een nieuw e-mailadres</div>';
      header("Refresh: 3; ./index.php?content=register_form");
    } else {

      date_default_timezone_set("Asia/Sakhalin");
      $length_email = strlen($email);
      $reverse_email = strrev($email);
      $date = date('d,m,Y H: i:s ');
      
      $password = $date . $reverse_email ;

      $pw = password_hash($password, PASSWORD_BCRYPT);


      $sql = "INSERT INTO `login` (`id`,
                                `email`,
                                `password`,
                                `userrole`)
                        VALUES  (NULL,
                                '$email',
                                '$password',
                                'translator')";

      $result = mysqli_query($conn, $sql);

      $id = mysqli_insert_id($conn);

      if ($result) {
        $to = $email;
        $subject = "registratie";
        $messege = "<!DOCTYPE html>
                      <html>
                        <style>
                        </style>
                        <head>
                          <title>Actiatie Account</title>
                        </head>
                        <body>
                          <h1>Hallo de registratie van uw accound is gelukt!</h1>
                          <p>Klik op de link hieronder om een wachtwoord intestellen en jouw account te activeren</p>
                          <a href='http://inloggen.stateu.org/index.php?content=createpassword&id=" . $id . "&pw=" . $pw . "'>activatie</a>
                          <p></p>
                        </body>
                      </html>";
        $headers = "MIME-Version: 1.0". "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: admin@inloggen.nl". "\r\n";
        $headers .= "Cc: info@wakkerdier.nl". "\r\n";

        mail($to, $subject, $messege,$headers);
        echo '<div class="alert alert-success" role="alert">U bent geregistreerd. Wij hebben een mail gestuurd naar dit adres. Klik daarin op de activatielink om uw registratie te voltooien.</div>';
        header("Refresh: 2; url=./index.php?content=home");
      } else {
        echo '<div class="alert alert-danger" role="alert">Er is iets misgegaan tijdens het registreren, probeer het nogmaals</div>';
        header("Refresh: 2; url=./index.php?content=register_form");
      }
    }
  }
?>