<?php
    $conn=mysqli_connect("localhost","root","","student");
    if(!$conn){
        die("error".mysqli_connect_error());
    }
    
    $sql="delete from `trirdyear` where rollno=49";
    if(mysqli_query($conn,$sql)){
        echo"connection success";
    }
    else{
        echo"error".mysqli_error($conn);
    }
    mysqli_close($conn);

?>