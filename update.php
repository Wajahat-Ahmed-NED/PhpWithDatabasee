<?php

$servername='localhost';
$username='root';
$password='';
$dbname='mydb1';

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="Update tblmyguests set lname='naveed' where id=2;";

if($conn->query($sql)===TRUE){
    echo'Update done successfully';
}
else{
    echo'Following error occured '.$conn->error;
}

$conn->close();

?>