<?php
$host ="localhost";
$user = "root";
$pass="";
$db="patient_details";

$con = mysqli_connect($host,$user,$pass,$db);

if ($con) {
    echo "";
}
else{
    echo "DB NOT CONNECTED";
}
?>