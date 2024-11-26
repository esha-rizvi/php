<?php

$servername = "localhost";
$username =  "root";
$password = "";
$database = "school";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connection_error){
    die("Connection Failed" . $conn->connection_error)
}

$sql = INSERT INTO `students`(`id`, `name`, `class`, `contact`) VALUES (001,'Ali Ahmed','4-A',1123456);

if($conn->query(sql) === true){
    echo ("Recorded");
}
else{
    echo ("unable to record <br> Error :" .$sql. $conn->connection_error );
}

$conn->close();



?>