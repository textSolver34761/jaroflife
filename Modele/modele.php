<?php

function connexiondb(){
	require 'create-pdo.php';
}

function prepareStatement($sql){
    //$pdo_statement = null;

    //connexiondb($sql);

	require __DIR__.'/create-pdo.php';
    /*if($pdo){
        try{
            $pdo_statement = $pdo->prepare($sql);
        } catch (PDOException $e) {
          echo 'erreur : ' . $e->getMessage();
        }
	}   */
    return $pdo_statement;
}

function fetchData() {
	$todos = [];
	$pdo = prepareStatement('SELECT title FROM tache');
	$pdo->execute();

	$todos = $pdo->fetchAll(PDO::FETCH_ASSOC);

	//$pdo_statement = prepareStatement('SELECT title FROM tache WHERE deleted_at IS NULL');

	//$sql = $pdo->prepare();
	//$sql-> execute();

	//if ($pdo_statement && $pdo_statement->execute()) {
	//	$todos = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
	return $todos;
}

function fetchDataBrowse(){
	$todosBrowse = [];
	$pdo = prepareStatement('SELECT * FROM tache');
	$pdo->execute();
	
		//$sql = ('SELECT * FROM tache');
		//$pdo_statement = prepareStatement('SELECT * FROM tache WHERE deleted_at IS NULL');
	
		//if ($pdo_statement && $pdo_statement->execute()) {
	$todosBrowse = $pdo->fetchAll(PDO::FETCH_ASSOC);
		return $todosBrowse;
}

function fetchDatabin() {
	$todosbin = [];
	$pdo = prepareStatement('UPDATE tache ' . 'SET deleted_at=CURRENT_TIMESTAMP()');
	$pdo->execute();

	//$sql = ('UPDATE tache ' . 'SET deleted_at=CURRENT_TIMESTAMP() ' . 'WHERE title=:title');
	//$pdo_statement = prepareStatement('UPDATE tache ' . 'SET deleted_at=CURRENT_TIMESTAMP() ' . 'WHERE title=:title');

	//if ($pdo_statement && $pdo_statement->execute()) {
	$todosbin = $pdo->fetchAll(PDO::FETCH_ASSOC);

	return $todosbin;
	header('Location: delete_1.php');
	exit();
}

function fetchDataedit(){
	$todosedit = [];
	$pdo = prepareStatement('UPDATE tache ' . 'SET title=:title, description=:description, priority=:priority, calendar=:calendar');
	$pdo = execute();
		//$sql = ('UPDATE tache ' . 'SET title=:title, description=:description ' .	'WHERE id=:id');
		//$pdo_statement = prepareStatement('UPDATE tache ' . 'SET title=:title, description=:description ' .	'WHERE id=:id');
	
		//if ($pdo_statement && $pdo_statement->execute()) {
		$todosedit = $pdo->fetchAll(PDO::FETCH_ASSOC);
	
		return $todosedit;

        header('Location: edit_1.php');
        exit();
	}

function add($values){
	$pdo = prepareStatement('INSERT INTO tache(title, description, priority, calendar)
							VALUES (:title, :description, :priority, :calendar)');
	$success = $pdo->execute(array(
		title => $values['title'],
		description => $values['description'],
		priority => $values['priority'],
		calendar => $values['calendar']
	));
	
	//$pdo = $todosadd->fetchAll(PDO::FETCH_ASSOC);

	
		//$sql = ('INSERT INTO tache(title, description, priority, calendar)' .
		//'VALUES(:title, :description, :priority, :calendar');
		//$pdo_statement = prepareStatement('INSERT INTO tache(title, description, priority, calendar)' .
		//'VALUES(:title, :description, :priority, :calendar');
	
		//if ($pdo_statement && $pdo_statement->execute()) {
		//	$todos = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

		return $success;
}