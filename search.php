
<?php

include "dbconnect.php";
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';


$sql="SELECT  id, pizzaname, country, ingredients, picture
        FROM pizzas
        WHERE pizzaname LIKE '%$keyword%' OR country LIKE '%$keyword%' ";
   
//execute SQL command
$result=mysqli_query($conn,$sql);
?>





