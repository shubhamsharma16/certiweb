<?php
$server="localhost";
$username="root";
$password="";
$dbname="shubh";

$ok=mysqli_connect($server,$username,$password,$dbname);
if($ok)
{
	echo "";
}
else
{
	echo "connection failed !!";
}
?>