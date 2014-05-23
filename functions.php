<?php

function connect() {
	global $pdo;
	$pdo = new PDO(	"mysql:host=localhost;dbname=corrosion", "root", "" );
	
}
	
function get_all_records (  ) {
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT * FROM `inventory`');
	$stmt->execute( array() );
	return $stmt->fetchAll ( PDO::FETCH_OBJ );
	
	
}

function get_data ( $part_number ) {
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT *
		FROM inventory
		WHERE LocalPartNumber LIKE :$part_number
	   ');
	$stmt->execute( array(':$part_number' => $part_number ) );
	return $stmt->fetch ( PDO::FETCH_OBJ );
	
	$row = mysqli_fetch_array($stmt);
	echo "<tr>";
  	echo "<td>" . $row['Description'] . "</td>";
  	echo "<td>" . $row['LocalPartNumber'] . "</td>";
  	echo "</tr>";
	
}	

connect();
get_all_records();

