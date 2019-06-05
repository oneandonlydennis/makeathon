<?php
    require("../includes/autoloader.php");
    if(isset($_POST['logout'])){
        User::logout();
        echo 'Je bent afgemeld';
    }
    if(isset($_SESSION['id'])){
        echo "test";
    }
?>
<div class="menu">
    <h4 class="logo">Rekenmaatje</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">Homepagina</a>
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