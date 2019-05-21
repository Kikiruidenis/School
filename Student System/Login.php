<?php
session_start();

if (isset($_SESSION['uid'])) 
{
header('location:Admin/admindash.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body bgcolor="#FFFF33";>
	<h1  align="center">Admin Login</h1>
	<form action="Login.php" method="POST">
		<table align="center">
			<tr>
				<td>Useranme</td><td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="pass" name="pass" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="Login" value="Login"></td>
			</tr>
		</table>

	</form>

</body>
</html>


<?php
include('dbconnect.php');
if (isset($_POST['Login'])) {
	$username =$_POST['uname'];
	$password =$_POST['pass'];
	$qry="SELECT * from Admin where username='$username' and password ='$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	if ($row<1)
	 {

		?>
		<script>
		alert('Username or Password not match !');
		window.open('Login.php','_self');
		</script>
		
	
	<?php
}

else
{
	$data = mysqli_fetch_assoc($run);

	$id = $data['id'];
	
	session_start();

	$SESSIon['uid'] =$id;
	header('location:Admin/admindash.php');


	# code...
}
}

?>