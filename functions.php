<?php

function connect() {
	global $pdo;
	$pdo = new PDO(	"mysql:host=localhost;dbname=inventory", "root", "" );
	
}
	
function get_all_records (  ) {
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT * FROM `inventory`');
	$stmt->execute( array() );
	return $stmt->fetchAll ( PDO::FETCH_OBJ );
	
}

function get_actor_info ( $actor_id ) {
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT film_info, first_name, last_name 
		FROM actor_info
		WHERE actor_id LIKE :actor_id
		LIMIT 1');
	$stmt->execute( array(':actor_id' => $actor_id ) );
	return $stmt->fetch ( PDO::FETCH_OBJ );
	
}	
?>