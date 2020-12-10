<?php
	require_once "../models/db_connect.php";
	$username=""; 
	$id="";
	
	$err_name="";
	$err_id="";
	$password="";
	$err_password="";
	$hasError=False;
	 if(isset($_POST["login"]))
	{
		if(!$hasError)
			{
				$result=authenticate($username,$password);
				if($result)
				{
					header("Location: dashboard.php");
				}
				else{
					echo "Invalid Username or Password";
				}
			}
	}
		
	
	
	
	function authenticate($username,$password)
	{
		
		
		//$query="Select username FROM users WHERE username ='$username' AND password ='$password'";
		$query = 'select username, password from final where username="' .$_POST['username'] .'" and password="' .md5($_POST['password']) .'";';
		
		$result=get($query);
		if(count($result)>0)return true;
		return false;
			
		
			
		
	}
	
	
	