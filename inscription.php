<?php
require __DIR__.'/Modele/modele.php';
// si je reçois des données du formulaireinscription.php,
if (
    isset($_POST['login']) &&
    isset($_POST['password'])
){
    $newUser=addUser();

    // si le User a été créé,
    if ($newUser == true) {
        //on démare la session
        Session_start();
        // on enregistre les infos utiles pour une utilisation future
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        //rediriger vers
        header('location: /Vue/page_membre.php');
    }
}
else {
    // afficher le formulaire
    require __DIR__.'/Vue/formulaireinscription.php';
}
