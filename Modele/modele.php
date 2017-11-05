<?php
function connexiondb(){
require __DIR__.'/create-pdo.php';
}

function prepareStatement($sql){
    $pdo_statement = null;

    $pdo = connexionbd();

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

	$pdo_statement = prepareStatement('SELECT title FROM tache WHERE deleted_at IS NULL');

	if ($pdo_statement && $pdo_statement->execute()) {
		$todos = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
	}

	return $todos;
}

function fetchDataBrowse(){
	$todos = [];
	
		$pdo_statement = prepareStatement('SELECT * FROM tache WHERE deleted_at IS NULL');
	
		if ($pdo_statement && $pdo_statement->execute()) {
			$todos = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
		}
	
		return $todos;
	}

function fetchDatabin() {
	$todos = [];

	$pdo_statement = prepareStatement('UPDATE tache ' . 'SET deleted_at=CURRENT_TIMESTAMP() ' . 'WHERE title=:title');

	if ($pdo_statement && $pdo_statement->execute()) {
		$todos = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
	}

	return $todos;
}
function fetchDataedit(){
	$todos = [];
	
		$pdo_statement = prepareStatement('UPDATE tache ' . 'SET title=:title, description=:description ' .	'WHERE id=:id');
	
		if ($pdo_statement && $pdo_statement->execute()) {
			$todos = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
		}
	
		return $todos;
}
function fetchDataadd(){
	$todos = [];
	
		$pdo_statement = prepareStatement('INSERT INTO tache(title, description, priority, calendar)' .
		'VALUES(:title, :description, :priority, :calendar');
	
		if ($pdo_statement && $pdo_statement->execute()) {
			$todos = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
		}

		return $todos;
}