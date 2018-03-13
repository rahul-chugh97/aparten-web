<?php
$id=0;
$society_code=$_REQUEST['society_code'];
$society_name=$_REQUEST['society_name'];
$society_city=$_REQUEST['society_city'];
// $con = mysqli_connect("localhost","root","","aparten");
include("PDOConnection.php");
$con = mysqli_connect($host,$user,$pwd,$dbName);
if($con)
	{

		$query="select * from society";
			$run1=mysqli_query($con,$query);
			if($run1)
			{
				while($row = $run1->fetch_assoc()) {
						$id=$id+1;
					
        	}
        	$id=$id+1;
        	echo $id;

			}

			$query="insert into society values('$id','$society_code','$society_name','$society_city')";
			$run=mysqli_query($con,$query);
			if($run)
			{
				echo "saved";
			}
			else
			{
				echo "not saved";
			}
	}
else
echo "disconnected from server"; 
?>