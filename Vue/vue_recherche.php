<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Style/semantic.css">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <title>Todo Liste</title>
</head>
<body>
    <div class="bgimg">
        <?php require __DIR__.'/entete.php';?>
        <br> 
        <br>
        <br>
        <br>
        <h1>Modifiez votre todo liste:</h1>
        <br>
        <br>
        <form action="recherche.php" method="post">
            <div>
                <label> Titre : </label>
                <input type="text" name="Chercher par titre">
            </div>
            <div>
                <input type="submit" value="Cherchez un titre dans votre todo liste">
            </div>
        </form>
        <br>
        <?php require __DIR__.'/pied_de_page.php';?>
    </div>
</body>
</html>