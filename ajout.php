<?php //Ajouter des éléments à la bdd
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=todo_project', 'root', '');
    } catch (Exception $e) {
        die ('Erreur : ' . $e->getMessage());   
}
if (isset($_POST["submit"])) {
    try {
        $sql = 'INSERT INTO tache(Label, Description, Priority, Date) VALUES(:Label, :Description, :Priority, :Date)';
        $statement = $bdd->prepare($sql);
        $statement->bindParam(':Label', $_POST['Label']);
        $statement->bindParam(':Description', $_POST['Description']);
        $statement->bindParam(':Priority', $_POST['Priority']);
        $statement->bindParam(':Date', $_POST['Date']);
        $statement->execute();
        echo 'Vous avez bien ajouté une tâche!';
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();    
}
}
?>