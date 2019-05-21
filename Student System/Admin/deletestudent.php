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

<body>
	<form method="POST" >
	<table align="center">
		<tr>
			<th>Enter the Standard</th>
			<td><input type="number" name="Standard" placeholder="Enter Standard" required></td>
		
			<th>Enter Student Name</th>
			<td><input type="text" name="stuname" placeholder="Enter Student Name" required></td>
		</tr>
		<br>

		<td colspan="2"><input type="Submit" name="Submit" value="Search"></td>
		<br>
	</table>
</form>

<table align="center" width="80%" border="1" style="margin-top: 10px;">
	<tr style="background-color: black; color: white;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Rollno</th>
		<th>Edith</th>
	</tr>
</table>

</body>
</html>
<?php
if (isset($_POST['Submit'])) {
include('../dbconnect.php');
$standard = $_POST['Standard'];
$name = $_POST['stuname'];
$sql ="SELECT * from student where standard ='' abd name like '$name'";
$run = mysqli_query($con,$sql);

if (mysqli_num_rows($run)<1)
{
	echo "<tr><td colspan='5'>no records found</td></tr>";
	
}

else
{
	$count = 0;
	while ($data =mysqli_fetch_assc($run)) {

$count++;
	?>
	<tr>
		<th><?php echo $count;?></th>
		<th><img src="../dataimg/<?php echo $data['image'];?>" style ="max-width: 100px;"> </th>
		<th><?php echo $data['name'];?></th>
		<th><?php echo $data['Rollno'];?></th>
		<th><a href="deleteform.php"$id=<?php echo $data['id'];?>Delete</th>
	</tr>
	}

	<?php
}

}
}
?>