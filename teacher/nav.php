<?php
require('../classes/class_user.php');
require('../classes/class_student.php');
require('../includes/database.php');
require('../includes/autoloader.php');
if (!User::loggedinUser()) {
    header('Location: http://rekenmaatje.nl/index.php');
    exit;
}

if (isset($_POST['logout'])) {
    $user->logout();
}
?>
<div class="menu">
    <h4 class="logo">Rekenmaatje</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="teacher.php">Leerling studievoortgang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="overzicht.php">Leerling overzicht</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="registeren.php">Leerling registreren</a>
        </li>
        <li class="nav-item">
            <form method="post"><button type="submit" name="logout" id="logout" class="btn btn-primary btn-lg btn-block">Afmelden</button></form>
        </li>
    </ul>
</div>