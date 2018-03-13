<?php

if(!isset($_REQUEST['username'])    ||
   	!isset($_REQUEST['password']))
   	{
   		echo '{"result":"invalid"}';
  		return false;
   	}

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$name;
$phone;
$flat;
$society;
$ownership;
$json='{"vals":[';
// $con = mysqli_connect("localhost","root","","aparten");
include("PDOConnection.php");
$con = mysqli_connect($host,$user,$pwd,$dbName);
if($con)
	{

			$query="select * from user where username='$username' and password='$password'";
			$run=mysqli_query($con,$query);
			if($run->num_rows>0)
			{
				$token = bin2hex(openssl_random_pseudo_bytes(32));
				while($row = $run->fetch_assoc()) {
					
					if ($json != '{"vals":[') {$json .= ',';}
					$json=$json.'{"result":"success","AuthToken":"'.$token.'","username":"'.$row["username"].'","name":"'.$row["name"].'","phone":"'.$row["phone"].'","flat":"'.$row["flat"].'","society":"'.$row["society"].'","ownership":"'.$row["ownership"].'"}';
					$query1="update user set AuthToken = '$token' where username='$username'";
					$run1=mysqli_query($con,$query1);
					if(!$run1)
					{
						echo '{"vals":[{"result":"invalid"}]}';
						break;
					}

        }
        $json=$json.']}';
        echo $json;

			}
			else
			{
				echo '{"vals":[{"result":"invalid"}]}';

			}
	}
	else
	{
		echo "connection error";
	}
	

?>