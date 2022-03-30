<?php
    $conn=mysqli_connect("localhost","root","","student");
    if(!$conn){
        die("connection faild".mysqli_connect_error());
    }
    $sql="select firstname,lastname from trirdyear";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_row($result)){
            echo $row[0].$row[1];
        }
    }
    else{
        echo" zero result";
    }
    mysqli_close($conn);
?>