<?php
echo'<html>';
    echo'<head>';
        echo'<meta charset="utf-8">';
        echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo'<meta http-equiv="X-UA-Compatible" content="ie=edge">';
        echo'<link rel="stylesheet" type="text/css" href="Style/semantic.css">';
        echo'<link rel="stylesheet" type="text/css" href="Style/style.css">';
        echo'<title>Bienvenu dans votre page membre</title>';
    echo'</head>';
    echo'<body>';
    echo'<div class="bgimg">';
    require __DIR__.'/entete.php';
    echo '<h1>Bienvenue dans votre compte premium, ' . $_SESSION['login'] . '</h1>';
    echo '<br>';
    echo '<br>';
    
    require __DIR__.'/pied_de_page.php';
    echo'</div>';
  echo'</body>';
echo'</html>';
?>