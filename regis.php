<?php 
	$con = mysqli_connect ('localhost', 'root', '', 'new_insertion', 3307);
	
	if (!$con)
	{
		echo 'not connected to server';
	}
	if (!mysqli_select_db($con, 'new_insertion'))
	{
		echo 'database not selected';
	}
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

	if (!mysqli_query ($con, $sql))
	{
		echo 'not registered';
	}
	else 
	{
		echo '<script>
				alert("成功註冊帳號");
				location="index.php";
			  </script>';
}
?>