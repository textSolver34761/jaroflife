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
	$pdo = prepareStatement('UPDATE tache
							SET title=:title, description=:description, priority=:priority, calendar=:calendar
							WHERE id=:id');
	if(
		$pdo_statement &&
		$pdo_statement->bindParam(':id', $_GET['id']) &&
		$pdo_statement->bindParam(':title', $_GET['title']) &&
		$pdo_statement->bindParam(':description', $_GET['description']) &&
		$pdo_statement->bindParam(':priority', $_GET['priority']) &&
		$pdo_statement->bindParam(':calendar', $_GET['calendar']) &&
		$pdo_statement->execute()
	){
		echo 'Vous avez bien mondifié la tâche!';
	}
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

function FetchPassword() {
    $password_valide = [];
    $pdo = prepareStatement('SELECT Password FROM user WHERE Password =$password');
    $pdo->execute();

    $password_valide = $pdo->fetchAll(PDO::FETCH_ASSOC);
}

function FetchLogin() {
    $login_valide = [];
    $pdo = prepareStatement('SELECT Password FROM user WHERE Login =$login');
    $pdo->execute();

    $login_valide = $pdo->fetchAll(PDO::FETCH_ASSOC);
}

function fetchRead() {
	$todoread = [];
	$pdo = prepareStatement('SELECT * FROM tache ORDER BY id DESC LIMIT 1');
	$pdo->execute();

	$todoread = $pdo->fetchAll(PDO::FETCH_ASSOC);

	return $todoread;
}

function fetchReadEdit() {
	$todoread = [];
	$pdo = prepareStatement('SELECT * FROM tache ORDER BY updated_at DESC LIMIT 1');
	$pdo->execute();

	$todoread = $pdo->fetchAll(PDO::FETCH_ASSOC);

	return $todoread;
}

function recherche(){

	$chercher = [];
	$pdo = prepareStatement("SELECT * FROM tache WHERE title LIKE '%$chercher%' ");
	$pdo->execute();

	$chercher = $pdo->fetchAll(PDO::FETCH_ASSOC);

	return $chercher;
}


function addUser(){
	if (isset($_POST['submit'])) {
		$pdo_statement = prepareStatement(
			'INSERT INTO user(Login, Password)
			VALUES(:Login, :Password)');

		if(
			$pdo_statement &&
			$pdo_statement->bindParam(':Login', $_POST['login']) &&
			$pdo_statement->bindParam(':Password', $_POST['password']) &&
			$pdo_statement->execute()
		){
			echo 'Nous vous remercions de votre confiance et vous souhaitons une excellente utilisation de vos todo liste';
			return true;
		}
	}
	return false;
}
