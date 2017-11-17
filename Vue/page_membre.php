<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="Style/semantic.css">
        <link rel="stylesheet" type="text/css" href="Style/style.css">
        <title>Bienvenu dans votre page membre</title>
    </head>
    <body>
    <div class="bgimg">
    <?php require __DIR__.'/entete.php';
    echo '<h1>Bienvenue dans votre compte premium, ' . $_SESSION['login'] . '</h1>';?>
    <br>
    <br>
    
    <?php require __DIR__.'/pied_de_page.php'; ?>
    </div>
  </body>
</html>