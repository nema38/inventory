<?require 'functions.php';
connect();
$data = get_all_records();
?>
<?php include 'header.php'; ?>

		<h1>Inventory</h1>
		<form action="index.php" method="post">
			<ul>
				<li>Line: <input type="text" name="Line"></li>
				<li>Part Number: <input type="text" name="localPartNumber"></li>
				<li>Description: <input type="text" name="description" /></li>
				<li>Supplier: <input type="text" name="supplier" ></li>
				<li>Lead Time: <input type="text" name="leadTime"></li>
				<li>Part Number: <input type="text" name="partNumber"></li>
				<li>Manufacturer: <input type="text" name="Maufac"></li>
				<li>Quantity: <input type="text" name="quantity"></li>
				<li>UO: <input type="text" name="UO"></li>
				<li>List: <input type="text" name="list"></li>
				<li>Extended: <input type="text" name="extended" /></li>
				<button type="submit">Go!</button>
			</ul>
			
		</form>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://cloud.github.com/downloads/wycats/handlebars.js/handlebars-1.0.0.beta.6.js"></script>
		
		<script>
			
			$('button').on('click', function() {
				
				console.log("hello!!");
				connect();
				console.log(get_all_records());
			})();
						
				
		</script>
		
		<script>
			
		</script>
<?php include 'footer.php';?>
	