<?php
	require_once 'controllers/CategoryController.php';
	$name = $_GET["name"];
	$books = SearchBook($name);
	/*foreach($categories as $category){
		echo "<tr>";
		echo "<td><a href='editcategory.php?id=".$category["id"]."'>".$category["name"]."</a></td>";
		echo "</tr>";
	}*/
	
	foreach($books as $book){
		echo "<tr>";
		echo '<td onclick="fill_suggest(this)">'.$book["name"].'</td>';
		echo "</tr>";
	}
	
?>