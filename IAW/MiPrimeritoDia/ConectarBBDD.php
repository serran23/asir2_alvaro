<?php 

include ("funcionbienchingona.php");


$_SESSION['name']=$_POST['name'];
$_SESSION['pass']=$_POST['pass'];
$_SESSION['bd']=$_POST['bd'];
$_SESSION['location']=$_POST['location'];

$a=fun($_POST['location'], $_POST['name'], $_POST['pass'], $_POST['bd']);

if(!($a->ping())){
	session_start();
}
?>