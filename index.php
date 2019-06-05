<!doctype html>
<html lang="en">
    <head>
        <title>Rekenmaatje</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="card" id="landingcard">
            <div class="card-body">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Leerlingnaam: </label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Vraag je leraar om hulp als je er niet uit komt.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord: </label>
                        <input type="text"
                            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Vraag je leraar om hulp als je er niet uit komt.</small>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">Log in!</button>
                </form>
            </div>
        </div>
        <?php
            //Activeer pas zodra je ingelogd bent
            //include("includes/home.php");
        ?>
    </body>
</html>