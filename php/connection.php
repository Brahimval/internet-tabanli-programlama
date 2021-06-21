<?php
//require_once "login.html";

$servername = "localhost";
$username = "root";
$password =  "aychadary2023";
$dbname = "demo";
$conn = new mysqli($servername,$username,$password ,$dbname);
if($conn -> connect_error){
    die("veri tabanai yok ".$conn->connect_error);
}
else{
    
}


?>