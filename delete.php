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

$sql="DELETE FROM tblmyguests WHERE ID='2' ";

if($conn->query($sql)===TRUE){
    echo('Deleted Successfully');

}
else{
    echo('Not Deleted' .$conn->error);
}

$conn->close();
?>