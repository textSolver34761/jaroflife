<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="semantic.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Todo Liste</title>
</head>
<body>
    <div class="bgimg">
        <?php include("entete.php");?>
        <br> 
        <br>
        <br>
        <br>
        <h1>Votre todo liste:</h1>
        <br>
        <br>
        <?php
        try
        {
            require("config.php");
            } catch (Exception $e) {
                die ('Erreur : ' . $e->getMessage());   
        }

        $reponse = $bdd->query("SELECT * FROM todo");
        while($donnees = $reponse->fetch())
        {
                echo $donnees ['title'].'<br>';
        }
        $reponse->closeCursor();
        ?>
        <br>
        <br>
        <?php include("pied_de_page.php");?>
    </div>
</body>
</html>