<?php
$society_code;
$society_name;
$society_address;
$json='{"vals":[';
// $con = mysqli_connect("localhost","root","","aparten");
include("PDOConnection.php");
$con = mysqli_connect($host,$user,$pwd,$dbName);
if($con)
	{

			$query="select * from society";
			$run=mysqli_query($con,$query);
			if($run)
			{
				while($row = $run->fetch_assoc()) {
					
					if ($json != '{"vals":[') {$json .= ',';}
					$json=$json.'{"id":"'.$row["id"].'","society_code":"'.$row["society_code"].'","society_name":"'.$row["society_name"].'","society_city":"'.$row["society_city"].'"}';
				

        }
        $json=$json.']}';
        echo $json;

			}
			
	}
	else
	{
		echo "connection error";
	}
	

?>