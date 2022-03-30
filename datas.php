<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="student";
    $conn=mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        die("connection failed".mysqli_connect_error());
    }
    $sql="create table trirdyear(
        rollno  INT(6),
        firstname VARCHAR(30),
        lastname VARCHAR(30),
        email VARCHAR(50))";
        if(mysqli_query($conn,$sql))
        {
            echo"table created";
        }
        else{
            echo"error".mysqli_error($conn);
        }
        mysqli_close($conn);
?>