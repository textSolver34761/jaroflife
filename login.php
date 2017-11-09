<?php

//require __DIR__.'/Modele/modele.php';

// si je reçois des données du formulaireid.php,
if (
    isset($_POST['login']) AND
    isset($_POST['password']) AND
    isset($_POST['confirme_password'])
){

    // si la création a réussi,
    if (true) {
        // rediriger vers
        header('Location: /Vue/page_membre.php');
    }
}
else {
    // afficher le formulaire
    require __DIR__.'index.php';
}