<?php
	require("../database.php");
	require("../ProdObj.php");

	header("Content-Type: application/json; charset=utf-8");

    $dbconnection = MysqlDatabase::get_instance();
    $products = $dbconnection->search_products($_POST["criteria"]);
    
	// JSON erzeugen
	$proTable = '{ "products": [';	

		for ($i = 0; $i < count($products); $i++ ){
			$product = $products[$i];
			$proTable .= json_encode(get_object_vars($product));
			if($i+1 < count($products)){
				$proTable .= ", ";
			}
		}
	
		$proTable .= " ] }";
		
		// Debug
		echo $proTable;
  ?>