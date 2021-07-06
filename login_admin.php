<?php
session_start(); 

include "admin_controller.php";  

$username = mysqli_real_escape_string($connect, $_POST['username']);  
$password = mysqli_real_escape_string($connect, $_POST['password']);  
$password = md5($password);  

$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
$data = mysqli_fetch_array($sql);  

if(!empty($data)){  
	$_SESSION['username'] = $data['username'];  
	$_SESSION['nama'] = $data['nama'];  
	setcookie("message","delete",time()-1);  
	header("location: welcome_admin.php"); 
}else{ 
	setcookie("message", "Username atau Password salah", time()+3600);
	header("location: index_akun_admin.php"); 
}
?>