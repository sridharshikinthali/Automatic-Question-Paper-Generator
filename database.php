<?php
    $servername = 'localhost';
    $username = 'abc';
    $password = 'deepak123';
    $dbname= 'deepak';
    $conn = new mysqli($servername, $username, $password,$dbname);
 if ($conn->connect_error)
    {
         die("Connection failed: " . $conn->connect_error);
    } 
?>