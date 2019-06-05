<?php
    include("./connect_db.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM `am1c-loginregistration-2018` WHERE `id` = $id";

    mysqli_query($conn, $sql);

    header("Location: ./index.php?content=gebruikersrollen");
?>