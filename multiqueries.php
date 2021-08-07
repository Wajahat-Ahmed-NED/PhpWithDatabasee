<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername='localhost';
    $username='root';
    $password='';
    
    $conn=new mysqli($servername,$username,$password);
    
    if($conn->connect_error){
        die("Not Connected to DataBase ".$conn->connect_error);
    }
    
    $sql='create database mydblab';
    
    if($conn->query($sql)===TRUE){
        echo'Alhamdulillah Created for the 6th time ';
        echo '<br>';
    }
    else{
        echo'Naaaa Error found '.$conn->error;
    }
    
    
    
    mysqli_select_db($conn,'mydblab');
    $sql2='Create table tblmyguests(
        id int(6) unsigned  auto_increment primary key,
        fname varchar(55) not null,
        lname varchar(55) not null,
        reg_date timestamp default current_timestamp on update current_timestamp);
        ';
        if($conn->query($sql2)===TRUE){
         echo'Table created successfully';
         echo '<br>';
        }
        else{
            echo'error aya ha '.$conn->error();
        }  
        //   $run2 = mysqli_query($conn,$sql2);
    


    $sql="Insert into tblmyguests(fname,lname) values('wajahat','ahmed');";

if($conn->query($sql)===TRUE){
    echo('Inserted Successfully');
    echo '<br>';

}
else{
    echo('Not inserted' .$conn->error);
}
    // $run3 = mysqli_query($con,$query3);
    // echo "values inserted successfully"; 

    $conn->close();
    ?>
</body>
</html>
