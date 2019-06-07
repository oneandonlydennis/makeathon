<?php
require('../classes/class_user.php');
require('../classes/class_student.php');
require('../includes/database.php');
require('../includes/autoloader.php');
if (!User::loggedinUser()) {
    header('Location: http://www.rekenmaatje.nl/index.php');
    exit;
}

if (isset($_POST['afmelden'])) {
    $user->logout();
}
?>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="card" id="studentcard">
    <img src="../img/student.png" alt="Student" class="studentimg">
    <div class="card-body">
        <p class="card-text">Goed gedaan <?php echo $user->data('username'); ?>! Je kan nu weer rustig naar je plek toe lopen, tik de volgende maar aan.</p>
        <form method="post"><button name="afmelden" type="submit" class="btn btn-primary btn-lg btn-block">Afmelden!</button></form>
    </div>
</div>
</body>
</html>