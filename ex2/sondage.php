<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>
<body>
    <h1>
        <?php 
            if(isset($_COOKIE["vote"]))
            {
                echo "Vous ne pouvez pas voter une deuxieme fois <br> Vous avez vote ".$_COOKIE["vote"] ;
            }
            else
            {
                setcookie("vote",$_POST["avis"],time() + 120) ;
                echo "Votre vote a ete enregistre" ;
            }
        ?>
    </h1>
</body>
</html>