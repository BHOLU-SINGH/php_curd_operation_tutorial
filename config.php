<?php
    // Connect with database 
    // syntax
    // $variable = mysqli_connect("your host name", "your user name", "your database password", "database name");

    $conn = mysqli_connect("localhost", "root", "", "curd_operations");

    // check this query is runs or not
    // if($conn){
    //     echo "connection established";
    // } else{
    //     echo "connection not established";
    // }
?>