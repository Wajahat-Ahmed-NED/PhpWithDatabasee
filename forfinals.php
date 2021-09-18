<?php 
$servername='localhost';
$username='root';
$password='';
$dbname='myFinals';

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("error occured ".$conn->connect_error);
}

$sql="insert into webEngg2 (fname,lname) values('imran','khan')
    ";
    if($conn->query($sql)===TRUE){
        echo 'Table Created';
    }
    else{
        echo 'Error occured'.$conn->error();
    }
    $conn->close();
?>