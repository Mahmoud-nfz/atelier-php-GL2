<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap</title>
</head>
<body>
    <h1>Recap</h1>
    <!-- <?php var_dump($_POST); ?> -->
    <?php var_dump($_FILES); ?>
    <?php move_uploaded_file(strip_tags($_FILES["cin"]["tmp_name"]), uniqid(rand(), true)); ?>
    <h3>Nom : <?= strip_tags($_POST["nom"]) ?> </h3>
    <h3>Prenom :  <?= strip_tags($_POST["prenom"]) ?> </h3>
    <h3>Nombresandwichs :  <?= strip_tags($_POST["nbsands"]) ?> </h3>
    <h3>Adresse : <?= strip_tags($_POST["adresse"]) ?> </h3>
    <h3>Typesandwich : <?= strip_tags($_POST["typesand"]) ?> </h3>
    <?php
        $ans = 4*$_POST["nbsands"] ;
        if($_POST["nbsands"] >= 10)
        {
            $ans = $ans*0.9 ;
        }
    ?>
    <h2>Prix :  <?= $ans ?> </h3>
        
</body>
</html>