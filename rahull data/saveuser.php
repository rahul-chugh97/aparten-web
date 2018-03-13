<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$flat=$_REQUEST['flat'];
$society=$_REQUEST['society'];
$ownership=$_REQUEST['ownership'];
// $con = mysqli_connect("localhost","root","","aparten");
include("PDOConnection.php");
$con = mysqli_connect($host,$user,$pwd,$dbName);
if($con)
	{

			$query="insert into user values('$username','$password','$name','$phone','$flat','$society','$ownership')";
			$run=mysqli_query($con,$query);
			if($run)
			{
				echo "registered";
			}
			else
			{
				echo "try again";
			}
	}
else
echo "disconnected from server"; 
?>