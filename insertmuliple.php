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
    values(12,'deepan','dharan','deepan@gmail.com') ;";
    $sql.="insert into trirdyear(rollno,firstname,lastname,email)
    values(49,'selva','raj','selva@gmail.com') ;";
    $sql.="insert into trirdyear(rollno,firstname,lastname,email)
    values(47,'sarath','kumar','sarath@gmail.com') ;";
    
    if(mysqli_multi_query($conn,$sql)){
        echo"connect success";
    }
    else{
        echo"error".mysqli_error($conn);
    }
    mysqli_close($conn);
?>