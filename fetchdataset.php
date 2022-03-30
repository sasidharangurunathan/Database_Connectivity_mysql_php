<?php
    $conn=mysqli_connect("localhost","root","","student");
    if(!$conn){
        die("connection failed".mysqli_connect_error());
    }
    $sql="select firstname,lastname from trirdyear";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            echo"name"."&nbsp;".$row["firstname"]."&nbsp;" .$row["lastname"]."<br>";
        }
    }
    else{
        echo"zero result";
    }
    mysqli_close($conn);
?>