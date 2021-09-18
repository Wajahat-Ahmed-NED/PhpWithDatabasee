<?php 
$servername='localhost';
$username='root';
$password='';
$dbname='myFinals';

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("error occured ".$conn->connect_error);
}



$sql2="delete from webengg2 where stdid=1;
    ";


    if($conn->query($sql2)===TRUE){
        echo 'INSERTED  SUCCESSFULLY';
    }
    else{
        echo 'Error occured'.$conn->error();
    }
    $conn->close();
?>