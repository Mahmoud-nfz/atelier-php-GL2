<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Keeps</title>
</head>
<body>
    <nav class="navbar navbar-idea bg-light">
        <!-- <button class="btn btn-outline-success my-2 my-sm-0">Voir notes</button> -->
        <a class="navbar-brand" href="/keeps.html">Keeps</a>
        <a class="nav-link float-right" href="http://localhost:8000/notes.php">Voir notes</a>
    </nav>
    <?php 
        if(!isset($_SESSION["notes"]))
        {
            session_start() ;
        }
        foreach($_SESSION["notes"] as $note){
    ?>

    <div class="card " style="width: 18rem;">
    <div class="card-body bg-primary">
        <p class="card-text"><?= $note ?></p>
    </div>
    </div>

    <?php
        }
    ?>

</body>
</html>