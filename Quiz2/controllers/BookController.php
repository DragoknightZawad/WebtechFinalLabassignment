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
	function getProduct($id)
	{
	
		$query = "SELECT * FROM products WHERE id=$id";
		$result=get($query);
		if(count($result)>0)$result=$result[0];
		
		return $result;
	}
	function SearchBook($name){
		$query = "SELECT * from books where name like'%$name%' ";
		$result = get($query);
	   
		//if(count($categories) < 2) 
		return $result;

	}
?>