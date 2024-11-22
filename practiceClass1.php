<?php

// echo and variables

$greet = "hello!";
$name = "php";
echo ($greet . " " . $name . "<br><br>");

// arthmetic operators 

$num1 = 10;
$num2 = 20;

echo ($num1 + $num2);
echo ("<br><br>")

// IF Else If Else

// $username = "admin123";   ERROR?????
// $pass = 123456;

// if ($username === "admin123" && $pass === 123456){
//         echo ("Login Succesful");
// }else{
//     echo "Login Failed";
// }

// echo ("<br><br>");

//ternary operators

$user = "admin123";
$pass = 123456;

echo ($user == "admin123" && $pass == 123456 || "Login Succesful" :"Login Failed");


?>