<?php 
    session_unset();

    session_destroy();

    echo '<div class="alert alert-success" role="alert">U bent sucsessvol uitgelocht</div>';
    header("Refresh: 2; url=./index.php?content=login_form");
    exit();
?>