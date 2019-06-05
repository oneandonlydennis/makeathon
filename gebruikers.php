<?php
    $userrole = ['super-admin'];
    include("./connect_db.php");
    include("./securety.php");


    $sql = "SELECT * FROM `login`";

    $result = mysqli_query($conn, $sql);
    $records = "";

    date_default_timezone_set("Asia/Sakhalin");
    $date = date('d,m,Y H: i:s ');
    $pw = password_hash($date, PASSWORD_BCRYPT);

    while ($record = mysqli_fetch_assoc($result)){
        $records .= '<tr><th scope="col">' . $record["id"] . "</th>
        <td>".$record["email"]."</td>
        <td>".$record["userrole"]."</td>
        <td>
            <a href='delete_gebruiker.php?id=" . $record["id"] . "&pw=" . $pw . "'>
                <img src='./img/kruisje.png' alt='verwijderen' id='icon'>
            </a>
        </td>
        </tr>";
    }
        
?>

    <style>
        #icon{
            width: 20px;
        }
    </style>

    <main class="container">
    <h1>Gebruikers:</h1><br>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col-md-2">id</th>
                            <th id="lang" scope="col-md-6">Email</th>
                            <th scope="col-md-2">Userrole</th>
                            <th scope="col-md-2">Verwijderen</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        echo $records;
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

    </main>