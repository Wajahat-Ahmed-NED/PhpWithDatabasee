<?php
$servername='localhost';
$username='root';
$password='';

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("connection failed this error occured <br>".$conn->connect_error);
}

$sql='create database myFinals;';

if($conn->query($sql)===TRUE){
    echo("Mashallah Database is created ");
}

else{
    echo "Not connected due to this error ".$conn->error;
}
$conn->close();
?>