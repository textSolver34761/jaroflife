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
        <form action="" method="post">
            <p>Label : <input type="text" name="Label" /></p>
            <p>Description : <input type="textarea" name="Description" rows=25 cols=5 /></p>
            <p>Priorité : <select name="Priority" size="1" />
                        <option>important et urgent</option>
                        <option>important et non-urgent</option>
                        <option>urgent et non-important</option>
                        <option>non-urgent et non-important</option>
                        </select>
            </p>
            <p>Action prévue pour le: <input type="Date" name="Date"></p>
            <p><input class="ui bif red button" type="submit" value="Modifier la todo liste" name="submit"></p>
        </form>
        <br>
        <?php include('modification.php');?>
        <br>
        <br>
        <?php include("pied_de_page.php");?>
    </div>
</body>
</html>