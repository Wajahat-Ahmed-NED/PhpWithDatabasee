<?php


$servername='localhost';
$username='root';
$password='';
$dbname='myDB1';

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die('An error occured'.$conn->connect_error);
}

$sql='Create table tblmyguests(
    id int(6) unsigned  auto_increment primary key,
    fname varchar(55) not null,
    lname varchar(55) not null,
    reg_date timestamp default current_timestamp on update current_timestamp);
    ';
    if($conn->query($sql)===TRUE){
     echo'Table created successfully';   
    }
    else{
        echo'error aya ha '.$conn->error();
    }

    $conn->close();
?>
