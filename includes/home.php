<?php
require('autoloader.php');
?>
<div class="row">
    <form method="POST" class="landingform">
        <div class="col-6">
            <a class="landinglink" href="student/student.php">
                <button class="landingbutton" name="loginstudent">
                    <div class="card" id="landingcards">
                        <div class="card-body">
                        <h4 class="card-title">Leerling</h4>
                        <img class="card-img-top" src="img/leerling.png" alt="Leerling">
                    </div>
                </div>
            </a>    
        </div>
        <div class="col-6">
            <a class="landinglink" href="teacher/teacher.php">
            <button class="landingbutton" name="loginteacher">
                <div class="card" id="landingcards">
                    <div class="card-body">
                    <h4 class="card-title">Leraar</h4>
                    <img class="card-img-top" src="img/leraar.png" alt="leraar">
                    </div>
                </div>
            </a>
        </div>
    </form>
</div>