<?php require_once"../controllers/usercontroller.php"; ?>
<html>
	<head></head>
	<body>
	
		<fieldset>
		* Fields are required
			<form action="" method="post">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" value="<?php echo $username?>" name="usename"></td>
						<td><span style="color:red;">*<?php echo $err_username;?></span>
						</td>
					</tr>
					<tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $name?>" name="$name"></td>
						<td><span style="color:red;">*<?php echo $err_name;?></span>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $password;?>" name="pass"></td>
						<td><span style="color:red;">*<?php echo $err_password;?></span>
						</td>
					</tr>
				
				
					<tr>
						<td>Email:</td>
					    <td><input type="text" value="<?php echo $email?>" name="email"></td>
						<td><span style="color:red;">*<?php echo $err_email;?></span>
						</td>
					</tr>
					<tr>
						<td>Contact:</td>
					    <td><input type="text" value="<?php echo $contact?>" name="contact"></td>
						<td><span style="color:red;">*<?php echo $err_contact;?></span>
						</td>
					</tr>
					
				
						<td colspan="2" align="right">
							<input type="submit" name="Register" value="register">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>

