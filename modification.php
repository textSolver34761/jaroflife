<?php //Modifier la bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=todo_project', 'root', '');
    } catch (Exception $e) {
        die ('Erreur : ' . $e->getMessage());   
}
$req = $bdd->prepare('UPDATE tache SET Label = :nvLabel, Description = :nvDescription, Priority = :nvPriority, Date = : nvDate WHERE Label = :Label_tache');
$req->execute(array(
    'nvLabel' => $nvLabel,
    'nvDescription' => $nvDescription,
    'nvPriority' => $nvPriority,
    'nvDate' => $nvDate,
    'Label_tache' => $Label_tache
));
?>