<?php
    //connect to db
    include "dbconnect.php";

    //get id parameter from query string
    $id=$_GET['id'];

    //sql command
    $sql="DELETE FROM pizzas WHERE id=$id";

    //execute sql
    $result=mysqli_query($conn,$sql);

    //evaluate the execution
    if($result==TRUE){
        echo"The record has been deleted";
    }
    else{
        echo"UNKNOWN ERROR";
    }

    mysqli_close($conn);
?>

<a href="homePage.php"><button>Go to homepage</button></a>