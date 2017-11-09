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
        <h1>Ajoutez du contenu à votre todo liste:</h1>
        <form action="add.php" method="post">
            <p>title : <input type="text" name="title" /></p>
            <p>description : <input type="textarea" name="description" rows=25 cols=5 /></p>
            <p>priority : <select name="priority" size="1" />
                        <option>important et urgent</option>
                        <option>important et non-urgent</option>
                        <option>urgent et non-important</option>
                        <option>non-urgent et non-important</option>
                        </select>
            </p>
            <p>Action prévue pour le: <input type="Date" name="calendar"></p>
            <p><input class="ui big red button" type="submit" value="Modifier la todo liste" name="submit"></p>
        </form>
        <?php require __DIR__.'../pied_de_page.php';?>
    </div>
</body>
</html>