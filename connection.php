<?php
$servername = "localhost";
$username = "root";
$password = "";
$db       = "icash";

$conection = mysqli_connect($servername,$username,$password,$db);
if(!$conection){
	echo mysql_connect_error();
}
echo "connected";
?>