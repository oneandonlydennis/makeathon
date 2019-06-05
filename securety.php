<?php 
    if (!isset($_SESSION["id"])){
        echo '<div class="alert alert-danger" role="alert">Uw bent niet ingelogt en uw heeft daarom geen recht tot deze pagina</div>';
        header("Refresh: 5; url=./index.php?content=home");
        exit();
    } elseif ( !in_array($_SESSION["userrole"],  $userrole)){
        echo '<div class="alert alert-danger" role="alert">Uw heeft niet de rechten voor deze pagina</div>';
        header("Refresh: 5; url=./index.php?content=logout");
        exit();
    }
?>