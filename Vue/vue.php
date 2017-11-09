<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Style/semantic.css">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <title>Lire les todos</title>
  </head>
  <body>
    <div class="bgimg">
      <?php require __DIR__.'/entete.php';?>
        <h1>Lire la todo-list</h1>
        <ul>
        <?php
          foreach ($todos as $ligne) {
        ?>
          <li>
            <?php echo $ligne['title'].'<br>'; ?>
          </li>
        <?php
          }
        ?>
        </ul>
        <?php require __DIR__.'/pied_de_page.php';?>
    </div>
  </body>
</html>