<?php

$servername='localhost';
$username='root';
$password='';
$dbname='mydb1';

$conn=new mysqli($servername,$username,$password,$dbname);
// mysqli ye 1 class ha
if($conn->connect_error){
    die('Error while connecting' .$conn->connect_error);
}

$sql="Insert into tblmyguests(fname,lname) values('wajahat','ahmed');";

if($conn->query($sql)===TRUE){
    echo('Inserted Successfully');

}
else{
    echo('Not inserted' .$conn->error);
}

$conn->close();
?>