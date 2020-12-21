<?php
require_once '../controllers/dashboard.php';
require_once"../controllers/usercontroller.php";
$students = getAllUsers();
$student = getastudent($_GET["id"]);
 include 'main_header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Dashboard</title>
  </head>
  <body>
<div class="container">


  
   <h1><b>Welcome to Webtech<b></h1>
    <p>All Students</p>


    <div class="center">
    	<table class="table table-striped" border="1">
    		<thead>
    			<th>Name</th>
    			<th> ID</th>
    			<th>DOB </th>
				<th>Credit </th>
				
				<th>CGPA </th>
          <th>Department </th>


    		</thead>
    		<tbody>
    			<?php

    			foreach ($students as $key)
				
				{
    						echo '<tr>';
    								echo '<td> '.$key["name"].'</td>';
                    echo '<td> '.$key["id"].'</td>';
                    echo '<td> '.$key["dob"].'</td>';
					echo '<td> '.$key["credit"].'</td>';
					echo '<td> '.$key["cgpa"].'</td>';
					
                    echo '<td> '.$key["dept_id"].'</td>';
				  
				echo '<td><a href="student.php/?id='.$key["id"] . '" class="btn btn-success" >Edit</a> </td>';
					echo'<td><a href="DeleteStudent.php" class="btn btn-danger">Delete</td>';
				

    						echo '</tr>';
    			}

    			 ?>
    		</tbody>
    	</table>
    </div>
    </div>

  </body>
</html>
