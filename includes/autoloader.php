<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (User::loggedinUser()) {
    $user = new User($_SESSION['id']);
}

?>