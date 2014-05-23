<?php

require 'functions.php';

if (isset($_POST['localPartNumber']) )	{
	$var = $_POST['localPartNumber'];	
	connect();
	echo "<h3>$var</h3>";
	$actors = get_all_records( $_POST ['localPartNumber'] );
	
	print_r($actors);
}

include 'index_tmpl.php';
?>
