<?php //Supprimer des éléments à la bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=todo_project', 'root', '');
    } catch (Exception $e) {
        die ('Erreur : ' . $e->getMessage());   
}
$req = $bdd->prepare('DELETE FROM tache WHERE Label=:Label');
$req->execute(array(
    'Label' => $Label
));
?>