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
<!DOCTYPE html>

<html>
<body bgcolor="#FFFF33";>

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
</body>
</html>
<?php 
include('../dbconnect.php');

if($_SERVER['REQUEST_METHOD']=='POST')

{
	
	$rollno = $_POST['rollno'];
	$name =$_POST['name'];
	$city =$_POST['city'];
	$pcon  =$_POST['pcon'];
	$std =$_POST['std'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$imagename");


	$qry = "INSERT INTO `student`(`id`, `rollNo`, `Name`, `Standard`, `city`, `pcont`, `image`) VALUES (NULL,'$rollno','$name','$std','$city','$pcon','$imagename')";

	$run = mysqli_query($con ,$qry);

	if ($run == true) 
	{
		?>
		<script>
			alert('Data Inserted Successfully');
		</script>

		<?php
	}
	
	}

 ?>