<?php 
  if (isset($_GET["content"])) {
    include("./includes/" . $_GET["content"] . ".php"); 
  } else {
    include("./includes/landing.php");
  }
?>