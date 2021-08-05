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
$sql.="Insert into tblmyguests(fname,lname) values('saqib','naveed');";
$sql.="Insert into tblmyguests(fname,lname) values('nizam','ali');";
$sql.="Insert into tblmyguests(fname,lname) values('hammad','khan');";


if($conn->multi_query($sql)===TRUE){
    echo('Inserted All Records Successfully');

}
else{
    echo('Not inserted'."<br>" .$conn->error);
}

$conn->close();
?>