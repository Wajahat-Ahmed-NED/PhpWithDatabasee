<?php 
$servername='localhost';
$username='root';
$password='';
$dbname='myFinals';

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("error occured ".$conn->connect_error);
}

$sql='create table webEngg(
    stdid int unsigned auto_increment primary key,
    fname varchar(255) not null,
    lname varchar(255) not null,
    rdate date );
    ';
    if($conn->query($sql)===TRUE){
        echo 'Table Created';
    }
    else{
        echo 'Error occured'.$conn->error();
    }
    $conn->close();
?>