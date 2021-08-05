<?php
$servername='localhost';
$username='root';
$password='';

$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("Not Connected this error is found ".$conn->connect_error);
}

echo'Alhamdulillah Successfully connected 5th time';
?>