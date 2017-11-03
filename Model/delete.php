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
        <h1>Modifiez votre todo liste:</h1>
        <br>
        <?php //Supprimer des éléments à la bdd
        try
        {
        require("config.php");
            } catch (Exception $e) {
                die ('Erreur : ' . $e->getMessage());   
        }
        $req = $bdd->prepare('DELETE FROM tache WHERE Label=:Label');
        $req->execute(array(
            'Label' => $Label
        ));

        ?>
        <br>
        <br>
        <?php include("pied_de_page.php");?>
    </div>
</body>
</html>