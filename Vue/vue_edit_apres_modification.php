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
        <h1>Ce que vous avez modifiés:</h1>
        <br>
        <br>
        <ul>
        <?php
          foreach ($todosbin as $ligne) {
        ?>
          <li>
              <?php echo $ligne['title']; ?>
              <p><?php echo $ligne['description']; ?></p>
              <p><?php echo $ligne['priority']; ?></p>
              <p><?php echo $ligne['calendar']; ?></p>
          </li>
        <?php
          }
        ?>
        </ul>
        <br>
        <?php require __DIR__. '/pied_de_page.php';?>
    </div>
</body>
</html>