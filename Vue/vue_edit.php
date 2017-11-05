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
        <?php include('modification.php');?>
        <br>
        <form action="" method="post">
            <div>
                <label> Titre : <input type="text" name="title" value="<?php echo $tache['title']; ?>"> </label>
            </div>

            <div>
                <label> Description : <textarea name="description"><?php echo $tache['description']; ?></textarea></label>
            </div>

            <div>
                <label> Priorité : <input type="text" name="priority" value="<?php echo $tache['priority']; ?>"> </label>
            </div>

            <div>
                <label> Calendrier : <input type="text" name="calendar" value="<?php echo $tache['calendar']; ?>"> </label>
            </div>

            <div>
                <input type="submit" value="Modifier votre todo liste">
            </div>
        </form>
        <br>
        <?php include("pied_de_page.php");?>
    </div>
</body>
</html>