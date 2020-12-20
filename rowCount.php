<?php
$conn=mysqli_connect('localhost','root','','dbms');
if($conn){
	$sql="SELECT count(*) as total  FROM region WHERE REGION_ID=103;";
	$result=mysqli_query($conn,$sql);
	$values=mysqli_fetch_assoc($result);
	$rows=$values['total'];
	echo $rows;

}
?>