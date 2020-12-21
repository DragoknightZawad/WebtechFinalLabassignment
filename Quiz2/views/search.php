<?php
	require_once"../controllers/BookController.php";
	$name =$_GET["name"];
	$result = SearchBook($name);

	if(count($result)>0){
		foreach($result as $p){
		echo "<tr>";
		echo '<td onclick="fill_suggest(this)">'.$p["name"].'</td>';
		echo "</tr>";
		echo $result;
		
	}
	
	}

	
?>