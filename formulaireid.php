<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Style/semantic.css">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <title>Parcourir les todos</title>
  </head>
  <body>
    <div class="bgimg">
      <?php require __DIR__.'/entete.php';?>
      <h1>formulaire d'identification</h1>
      <br>
        <form action="./login.php" method="post">
            <label="nom" name="login"> Login:</label>
            <input type="texte" name="login"/>

            <label="nom" name="password"> Password:</label>
            <input type="texte" name="password"/>

        </form>
      <?php require __DIR__.'/pied_de_page.php';?>
    </div>
  </body>
</html>