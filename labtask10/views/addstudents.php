<?php include 'admin_header.php';
      require_once"../controllers/usercontroller.php";
	
	  
?>
<!--addproduct starts -->
<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
		
			
		</div>
		<div class="form-group">
			<h4 class="text">ID:</h4> 
			<input type="text" name="id" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">DOB:</h4> 
			<input type="text" name="dob" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Credit:</h4> 
			<textarea type="text" name="credit" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<h4 class="text">Cgpa</h4> 
		<textarea type="text" name="cgpa" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<h4 class="text">Department</h4> 
		<textarea type="text" name="dept_id" class="form-control"></textarea>
		</div>
		<div class="form-group text-center">
			
			<input type="submit"  class="btn btn-success" name="addstudents" value="Add" class="form-control">
		</div>
	</form>
</div>

