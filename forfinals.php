<?php

$servername='localhost';
$username='root';
$password='';
$dbname='myFinals';


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error found ".$conn->connect_error);
}

$sql='select * from webengg2 where stdid=3;';

$result=$conn->query($sql);
if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        echo "id : ".$rows['stdid'].'fname :'.$rows['fname'].'lname : '.$rows['lname'].'regDate : '.$rows['rdate'].'<br>';
    }
}
else{
    echo "0 result";
}
?>