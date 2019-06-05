<?php
  // Hier worden constanten gedefinieerd. Een constante kun je niet veranderen.
  define("SERVERNAME", "45.79.98.195");
  define("USERNAME", "fbmnwszq_tijn");
  define("PASSWORD", "V{k%xxTE#U(9");
  define("DBNAME", "fbmnwszq_am1c-loginregistration-2018");

  // We maken contact met de database
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
?>