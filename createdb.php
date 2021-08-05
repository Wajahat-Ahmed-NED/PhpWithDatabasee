<?php
$servername='localhost';
$username='root';
$password='';

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
    die("Not Connected to DataBase ".$conn->connect_error);
}

$sql='create database myDB1';

if($conn->query($sql)===TRUE){
    echo'Alhamdulillah Created for the 6th time ';
}
else{
    echo'Naaaa Error found '.$conn->error;
}

$conn->close();