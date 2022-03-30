<?php
    $servername="localhost";
    $username="root";
    $password="";

    $conn=mysqli_connect($servername,$username,$password);

    if(!$conn){
        die("connection faild".mysqli_connect_error());

    }
    $sql="create database student";
    if(mysqli_query($conn,$sql))
    {
        echo "database created succesfully";
    }
    else{
        echo"Error".mysqli_error($conn);
    }
    
    mysqli_close($conn);
    

    ?>