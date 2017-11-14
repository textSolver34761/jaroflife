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
      <?php require __DIR__.'/Vue/entete.php';?>
      <h1>formulaire d'identification</h1>
      <br>
        <form action="login.php" method="post">
            <label> Login:</label>
            <input type="texte" name="login" placeholder="ex : Ben" required/>
            <br>
            <label> Password:</label>
            <input type="password" name="password" required/>
            <br>
            <input type="submit" value="M'identifier">

        </form>
      <?php require __DIR__.'/Vue/pied_de_page.php';?>
    </div>
  </body>
</html>