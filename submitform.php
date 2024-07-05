<?php
if(isset($_POST['submit']))
{
    $name=$_POST['uname'];
	$email=$_POST['email'];   
	$sub=$_POST['sub'];
	$mes=$_POST['message'];
	$con=mysqli_connect("localhost:3306","root","","portfolio");
    $c="INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$sub','$mes')";
	$r=mysqli_query($con,$c);
	if($r)
	{
		echo "<script>alert('Sended successfully');</script>";
	}
	else
	{
		echo "<script>alert('Please fill all the details');</script>";
		
	}
}
?>