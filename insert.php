<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="student";
    $conn=mysqli_connect($servername,$username,$password,$db);
    if(!$conn){
        die("error".mysqli_connect_error());
    }
    $sql="insert into trirdyear(rollno,firstname,lastname,email)
    values(10,'sasi','dharan','sasi@gmail.com') ";
    
    if(mysqli_query($conn,$sql)){
        echo"connect success";
    }
    else{
        echo"error".mysqli_error($conn);
    }
    mysqli_close($conn);
?>