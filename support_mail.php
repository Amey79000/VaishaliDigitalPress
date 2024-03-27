<?php 

$servername="localhost";
	$username="root";
	$password="";
	$dbname="majorpro";

	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
if(isset($_POST["send"])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$sql="INSERT INTO majorpro1 VALUES ('$name','$email','$mobile','$subject','$message')";
	if($conn->query($sql)=== TRUE)
	{
		header("Location:Record.html");
	}
	else
	{
		"Error ".$sql."<br>".$conn->error;
	}
}
	?>