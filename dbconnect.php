<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="pizzadb";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    
    if (!$conn) {
        die("connection failed");
    }  
    
?>