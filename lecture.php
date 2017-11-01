<?php //Lire la bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=todo_project', 'root', '');
    } catch (Exception $e) {
        die ('Erreur : ' . $e->getMessage());   
}

$reponse = $bdd->query("SELECT * FROM tache");
while($donnees = $reponse->fetch());
{
?>
    <p>
        <strong> Nom de la tâche </strong>:<?php echo $donnees ['Label']; ?>
    </p>
<?php
}
$reponse->closeCursor();

?>