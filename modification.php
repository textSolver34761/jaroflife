<?php //Modifier la bdd
$dsn = 'mysql:dbname=todo_project;host=localhost';
$user = 'root';
$password = ' ';
try
{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();   
}
if (isset($_POST["submit"])) {
    
    try {
        $sql = 'INSERT INTO clients (Label, Description, Priority, Date) VALUES (:Label, :Description, :Priority, :Date)';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':Label', $_POST['Label']);
        $statement->bindParam(':Description', $_POST['Description']);
        $statement->bindParam(':Priority', $_POST['Priority']);
        $statement->bindParam(':Date', $_POST['Date']);
        
        $statement->execute();
        
        
        
        //$date_fr = '03/03/2010';  traduction format Fr --> format US
        //$date_us = implode('-', array_reverse(explode('/', $date_fr)));
        
        
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
     
}

}

?>