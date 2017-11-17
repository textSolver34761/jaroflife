<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Style/semantic.css">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <title>Formulaire</title>
  </head>
  <body>
    <div class="bgimg">
      <?php require __DIR__.'/entete.php';?>
      <h1>formulaire de connexion</h1>
      <br>
        <form action="connexion.php" method="post">
            <label> Login:</label>
            <input type="texte" name="login" placeholder="ex : Ben" required/>
            <br>
            <label> Password:</label>
            <input type="password" name="password" required/>
            <br>
            <input type="submit" value="Se connecter">

        </form>
      <?php require __DIR__.'/pied_de_page.php';?>
    </div>
  </body>
</html>