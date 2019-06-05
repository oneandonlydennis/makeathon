<?php
    $id = $_GET["id"];

    include("./connect_db.php");

    $sql = "SELECT * FROM `am1c-loginregistration-2018` WHERE `id` = $id";

    $result = mysqli_query($conn, $sql);

    $record = mysqli_fetch_assoc($result);

    //echo "<pre>"; var_dump($record); echo "</pre>";
?>

<form action="./update_script.php" method="post">
            <div class="form-group">
              <label for="voornaam">Voornaam</label>
              <input type="text" class="form-control" id="voornaam" aria-describedby="voornaamHelp" placeholder="Voornaam" name="voornaam" value="<?php echo $record['voornaam']; ?>">
            </div>
            
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <button type="submit" class="btn btn-primary">Stuur het op</button>
          </form>