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
        <h1>Votre todo liste actualisée:</h1>
        <br>
        <?php
        foreach($todoread as $ligne){
            echo $ligne ['title']. '<br>';
        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <?php require __DIR__.'/pied_de_page.php';?>
    </div>
</body>
</html>