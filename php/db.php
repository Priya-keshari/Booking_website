<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "hotel";
$table = "contact";

$conn = mysqli_connect($host,$user,$pass,$db);

if($conn){
    echo "";
}
else{
    echo "db not connected";
}


?>