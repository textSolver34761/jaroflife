<?php

require __DIR__.'/Modele/modele.php';

// si je reçois des données de formulaire,
if (
    isset($_POST['Chercher par titre'])
){
    $chercher = recherche();
	$chercher = preg_replace("#[^0-9a-z]#i","",$chercher);

    // si la création a réussi,
    if ($chercher) {
        // rediriger vers
        header('Location: edit.php');
    }
}