<?php 
//session_start();
if(!(isset($_SESSION['username']))){
	// die("UNAUTHORIZED ACCESS");
	header('location:login.php');
}
 ?>