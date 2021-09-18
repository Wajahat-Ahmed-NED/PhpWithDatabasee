<?php

$servername='localhost';
$username='root';
$password='';
$dbname='myFinals';


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error found ".$conn->connect_error);
}

$sql="UPDATE  webengg2  set fname='wajahat' where stdid=3;";

if( $conn->query($sql)===TRUE){
    echo "Updated successfully";
}
else{
    echo"error occured".$conn->error();
}

$conn-.close();
?>