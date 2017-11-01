<?php //Lire la bdd
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

$sql = "SELECT * FROM tache Orderby Priority";
$req = $pdo->query($sql);  
while ($row = $req->fetch()) { 
    echo $row['Label'];
}
$req->closeCursor();
?>