<?php

function prepareStatement($sql) {
    
	require __DIR__.'/create-pdo.php';

    if($pdo){
        try{
            $pdo_statement = $pdo->prepare($sql);
        } catch (PDOException $e) {
          echo 'erreur : ' . $e->getMessage();
        }
	}  
    return $pdo_statement;
}

function fetchData() {
	$todos = [];
	$pdo = prepareStatement('SELECT title FROM tache');
	$pdo->execute();

	$todos = $pdo->fetchAll(PDO::FETCH_ASSOC);

	return $todos;
}

function fetchDataBrowse(){
	$todosBrowse = [];
	$pdo = prepareStatement('SELECT * FROM tache');
	$pdo->execute();
	
	$todosBrowse = $pdo->fetchAll(PDO::FETCH_ASSOC);
		return $todosBrowse;
}

function fetchDatabin() {
	$todosbin = [];
	$pdo = prepareStatement('UPDATE tache ' . 'SET deleted_at=CURRENT_TIMESTAMP()');
	$pdo->execute();

	$todosbin = $pdo->fetchAll(PDO::FETCH_ASSOC);

	return $todosbin;
	header('Location: delete_1.php');
	exit();
}

function fetchDataedit(){
	$tache = [];
	$pdo = prepareStatement('UPDATE tache ' . 'SET title=:title, description=:description, priority=:priority, calendar=:calendar');
	$pdo = execute();

		$tache = $pdo->fetchAll(PDO::FETCH_ASSOC);
	
		return $tache;

	}

function add(){
	if (isset($_POST['submit'])) {
		$pdo_statement = prepareStatement(
			'INSERT INTO tache(title, description, priority, calendar)
			VALUES(:title, :description, :priority, :calendar)');

		if(
			$pdo_statement &&
			$pdo_statement->bindParam(':title', $_POST['title']) &&
			$pdo_statement->bindParam(':description', $_POST['description']) &&
			$pdo_statement->bindParam(':priority', $_POST['priority']) &&
			$pdo_statement->bindParam(':calendar', $_POST['calendar']) &&
			$pdo_statement->execute()
		){
			echo 'Vous avez bien ajouté une tâche!';
		}
	}
	return $pdo_statement;
}

function FetchPassword($login, $password) {
    $password_valide = [];
    $pdo = prepareStatement('SELECT Password FROM user WHERE Login =$login');
    $pdo->execute();

    $password_valide = $pdo->fetchAll(PDO::FETCH_ASSOC);
}

function fetchRead() {
	$todoread = [];
	$pdo = prepareStatement('SELECT * FROM tache ORDER BY id DESC LIMIT 1');
	$pdo->execute();

	$todoread = $pdo->fetchAll(PDO::FETCH_ASSOC);

	return $todoread;
}