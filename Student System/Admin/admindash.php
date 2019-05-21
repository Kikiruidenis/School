<?php
session_start();

if (isset($_SESSION['id'])){

	echo "";
	# code...
}
?>
<?php
include ('header.php');

?>
<!DOCTYPE html>
<html>
<body bgcolor="#FFFF33";>
<div class="admintitle" align="center">
<h1>Welcome to Admin Dashboard</h1>
<h4><a href="Logout.php" style="float: right; margin-right: 40px; color: #fff; font-size: 20px;">Logout</a></h4>
</div>
<div class="Dashboard">
	<table align="center">
		<tr>
			<td>1.</td><td> <a href="addstudent.php">Insert Student Details</a></td>
		</tr>
		<br>
		<tr>
		   <td>2.</td><td> <a href="updatestudent.php">Update Student Details</a></td>
		</tr>
		<br>
		<tr>
		   <td>3.</td><td> <a href="deletestudent.php">Delete Student Details</a></td>
		</tr>
		<br>
	</table>
	
</div>

</body>
</html>