<?php 
	session_start();
	include 'connect.php';
	$result = $conn->query('select * from user');
	while ($rs = mysqli_fetch_array($result)) {
		if ($rs['username']==$_GET['user']&&$rs['password']==$_GET['pass']) {
			$_SESSION['user'] = $rs['username'];
		}
	}
	if($_SESSION['user']) header('Location:index.php');
 ?>