<?php

$servername='localhost';
$username='root';
$password='';
$dbname='mydb1';

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die('Error aya ha '.$conn->connect_error);
}

$sql="Select id,fname,lname from tblmyguests where lname='naveed';";

$result=$conn->query($sql);

if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        echo 'id  '.$rows['id'].'    -fname  '.$rows['fname'].'      -lname   '.$rows['lname']."<br>";
    }
    
}
else{
    echo'0 results';
}

$conn->close();
?>