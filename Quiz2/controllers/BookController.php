<?php
    require_once "../models/db_connect.php";
	$name=""; 
	$id="";
	$author="";
	$edition="";
	$image="";
	
	function getAllbooks()
	{
		$query="Select * FROM books";
		$result = get($query);
		return $result;
	}
	function getBook($id){
  $query="SELECT * FROM books WHERE id=$id";
  $books = getArray($query);
  return $books[0];

	}
	function SearchBook($name){
		
		$query = "SELECT * from books where name like '%$name%'; ";
		$result = getArray($query);
	   
		//if(count($categories) < 2) 
		return $result;

	}

?>