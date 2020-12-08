<?php
	require_once "../models/db_connect.php";
	$name="";
	$username="";
	
	$err_name="";
	$err_username="";
	$password="";
	$err_password="";
	$contact="";
	$err_contact="";
	$email="";
	$err_email="";
	$hasError=False;
	if(isset($_POST["Register"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError =true;	
		}
		else{
			$name = htmlspecialchars($_POST["name"]);
		}
	
		if(empty($_POST["username"])){
			$err_username="Username Required";
			$hasError =true;	
		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError =true;	
		}
		else{
			$email = htmlspecialchars($_POST["email"]);
		}
		if(empty($_POST["password"])){
			$err_password="password Required";
			$hasError =true;	
		}
		else{
			$password = htmlspecialchars($_POST["password"]);
		}
		
			if(!$hasError)
			{
				//echo"Ok";
				addUser($name,$username,$email,$password);
				header("Location: login.php");
				
			}
			
			
			
	}
	else if(isset($_POST["login"]))
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
	
	function addUser($name,$username,$email,$password)
	{
		$password=md5($password);
		
	    $query = "INSERT INTO final (name,username,email,password) VALUES ('$name','$username','$email','$password')";
		execute($query);
		
		
		
		
	}
	function authenticate($username,$password)
	{
		
		
		//$query="Select username FROM users WHERE username ='$username' AND password ='$password'";
		$query = 'select username, password from users where username="' .$_POST['username'] .'" and password="' .md5($_POST['password']) .'";';
		
		$result=get($query);
		if(count($result)>0)return true;
		return false;
			
		
			
		
	}
	
	
	