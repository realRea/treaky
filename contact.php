<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','treaky_input');

// get the post records
$txtname = $_POST['txtname'];
$txtmobile = $_POST['txtmobile'];
$txtemail = $_POST['txtemail'];

// database insert SQL code
$sql = "INSERT INTO `details` (`Id`,`name`, `mobile`, `email`) VALUES ('0','$txtname', '$txtmobile', '$txtemail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>