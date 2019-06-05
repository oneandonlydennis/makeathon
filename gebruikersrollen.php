<?php 
    $userrole = ['root'];
    include("./securety.php");



    $userrole = ['super-admin'];
    include("./connect_db.php");


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
            <a href='update.php?id=" . $record["id"] . "'>
                <img src='./img/images.png' alt='aanpassen' id='icon'>
            </a>
        </td>
        </tr>";
    }

    
    ?>


<table class="table table-hover">
                        <thead>
                            <tr>
                                <th scopre="col">id</th>
                                <th scope="col">Email</th>
                                <th scope="col">Userrole</th>
                                <th scope="col">bewerken</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            echo $records;
                            ?>                
                        </tbody>
                    </table> 

