<?php

require __DIR__.'/Modele/modele.php';

// si je reçois des données de formulaire,
if (
    isset($_POST['title']) OR
    isset($_POST['description']) OR
    isset($_POST['priority']) OR
    isset($_POST['calendar'])
){
    $success = add();

    // si la création a réussi,
    if ($success) {
        // rediriger vers
        header('Location: /Vue/vue_add_apres_ajout.php');
    }
}
else {
    // afficher le formulaire
    require __DIR__.'/Vue/vue_add.php';
}
