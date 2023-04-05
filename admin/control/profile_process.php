<?php
session_start();
include "../model/mydb.php";
$fname=$lname=$email=$gender=$course=$file="";
if(empty($_SESSION["email"]))
{
    header("Location: ../view/login.php");
}
$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->getUserInfo("customer", $_SESSION["email"], $conobj);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $email=$row["email"];
        $gender=$row["gender"];
        $course=$row["course"];
        $file=$row["file"];
    }
}

?>