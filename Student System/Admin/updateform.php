<?php
session_start();

if (isset($_SESSION['id'])){

	echo "";
	# code...
}
?>
<?php
include ('header.php');
include ('titlehead.php');

?>
<form method="POST" action="addstudent.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 70%; margin-top: 40px;">
		<tr>
			<th align="left">Roll No</th>
			<td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
		</tr>
		<tr>
			<th align="left">Full Name</th>
			<td><input type="text" name="name" placeholder="Enter Full Name" required></td>
		</tr>
		
		<tr>
			<th align="left">City</th>
			<td><input type="text" name="city" placeholder="Enter City" required></td>
		</tr>
		
		<tr>
			<th align="left">Parent Contacts No</th>
			<td><input type="text" name="pcon" placeholder="Enter Contact no of a Parent" required></td>
		</tr>
		
		<tr>
			<th align="left">Standard</th>
			<td><input type="number" name="std" placeholder="Enter the Standard" required></td>
		</tr>
		<tr>
			<th align="left">Image</th>
			<td><input type="file" name="simg"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="Submit" value="Submit">
			</td>
		</tr>
		
		
	</table>

</form>