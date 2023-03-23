<?php
session_start();
include "../model/mydb.php";
if(!empty($_SESSION["email"]))
{
    header("Location: ../view/profile.php");
}


if(isset($_REQUEST["login"]))
{
    $match=0;
    if(empty($_REQUEST["email"]))
    {
        echo "Please enter your email address";
    }
    elseif(empty($_REQUEST["password"]))
    {
        echo "Please enter your password";
    }
    else{
$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->checkUser("customer",$_REQUEST["email"], $_REQUEST["password"],
$conobj);  
if($result->num_rows >0)
{
    $_SESSION["email"]=$_REQUEST["email"];
    header("Location: ../view/profile.php");
} 
else
{
    echo "Please correct email and password";
}

    }

}



?>