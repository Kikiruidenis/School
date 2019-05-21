<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
</head>
<body bgcolor="#FFFF33";>
	 
	<h3 align="right" style="margin-right: 20px;"><a href="Login.php">Admin Login</a></h3>
	<h1 align="center">Welcome to Student Management System</h1>

	<form method="POST" action="index.php">
	<table style="width: 50%;" align="center" border="1">
		<tr>
			<td colspan="2" align="center">Student Information</td>
		</tr>
		<tr>
			<td align="left">Chose Standard</td>
			<td>
				<select name="std" required>
					<option value="1">1st</option>
					<option value="2">2st</option>
					<option value="3">3st</option>
					<option value="4">4st</option>
					<option value="5">5st</option>
					<option value="6">6st</option>
										
				</select>
				
			</td>
		</tr>
		<tr>
		<td align="left">Enter Rollno</td>
		<td>
			<input type="text" name="rollno" required>
		</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="Show Details">
			</td>
		</tr>
	</table>
</form>

</body>
</html>