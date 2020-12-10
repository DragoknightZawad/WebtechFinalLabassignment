<?php
	require_once "../models/db_connect.php";
	$name=""; 
	$id="";
	
	$err_name="";
	$err_id="";
	$password="";
	$err_password="";
	$dob="";
	$err_dob="";
	$credit="";
	$err_credit="";
	$department="";
	$cgpa="";
	$err_department="";
	$hasError=False;
	/* 
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
		if(empty($_POST["contact"])){
			$err_contact="Phone Required";
			$hasError =true;	
		}
		else{
			$contact = htmlspecialchars($_POST["contact"]);
		}
		
			if(!$hasError)
			{
				//echo"Ok";
				addUser($name,$username,$email,$password,$contact);
				header("Location: login.php");
				
			}
			
			
			
	}
	*/
	if(isset($_POST["addstudents"]))
	{
		$hasError=False;
		if(!$hasError)
		{
			
			addUser($_POST["name"],$_POST["id"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"]);
			header("Location:allstudents.php");
		}
	}
	if(isset($_POST["editstudents"]))
	{
		$hasError=False;
		if(!$hasError)
		{
			
			addUser($_POST["name"],$_POST["id"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"]);
			header("Location:allstudents.php");
		}
	}
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
		
	
	
	function addUser($name,$id,$dob,$credit,$cgpa,$department)
	{
		$password=md5($password);
		
	    $query = "INSERT INTO students(name,id,dob,credit,cgpa,dept_id) VALUES ('$name','$id','$dob','$credit','$cgpa','$department')";
		execute($query);
		
		
		
		
	}
	function editstudent($name,$id,$dob,$credit,$cgpa,$department)
	{
	
		$query = "Update students(name,dob,credit,cgpa,dept_id) VALUES ('$name','$dob','$credit','$cgpa','$department') where id=$id";
	     execute($query);
		
	}
	function authenticate($username,$password)
	{
		
		
		//$query="Select username FROM users WHERE username ='$username' AND password ='$password'";
		$query = 'select username, password from final where username="' .$_POST['username'] .'" and password="' .md5($_POST['password']) .'";';
		
		$result=get($query);
		if(count($result)>0)return true;
		return false;
			
		
			
		
	}
	
	
	