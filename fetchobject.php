<?php
    $conn=mysqli_connect("localhost","root","","student");
    if(!$conn){
        die("connection faild".mysqli_connect_error());
    }
    $sql="select firstname,lastname from trirdyear";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($obj=mysqli_fetch_object($result)){
            echo $obj->firstname.$obj->lastname;
        }
    }
    else{
        echo" zero result";
    }
    mysqli_close($conn);
?>