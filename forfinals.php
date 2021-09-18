<?php 
$servername='localhost';
$username='root';
$password='';
$dbname='myFinals';

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("error occured ".$conn->connect_error);
}

$sql="insert into webEngg2 (fname,lname) values('imran','khan');
    ";

$sql.="insert into webEngg2 (fname,lname) values('ali','mughal');
    ";

$sql.="insert into webEngg2 (fname,lname) values('basit','ahmed');
    ";

$sql.="insert into webEngg2 (fname,lname) values('junaid','khan');
    ";

    if($conn->multi_query($sql)===TRUE){
        echo 'INSERTED  SUCCESSFULLY';
    }
    else{
        echo 'Error occured'.$conn->error();
    }
    $conn->close();
?>