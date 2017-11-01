<?php //Modifier la bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=todo_project', 'root', '');
    } catch (Exception $e) {
        die ('Erreur : ' . $e->getMessage());   
}
$req = $bdd->prepare('UPDATE tache SET Label = :Label, Description = :Description, Priority = :Priority, Date = : Date WHERE Label = :Label');
$req->execute(array(
    'Label' => $Label,
    'Description' => $Description,
    'Priority' => $Priority,
    'Date' => $Date
));
?>