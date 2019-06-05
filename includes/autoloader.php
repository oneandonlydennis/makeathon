<?php

require('classes/class_user.php');
require('includes/database.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (User::loggedinUser()) {
    $user = new User($_SESSION['id']);
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>