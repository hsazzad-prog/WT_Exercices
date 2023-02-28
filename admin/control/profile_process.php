<?php
session_start();
$fname=$lname=$email="";
if(empty($_SESSION["email"]))
{
    header("Location: ../view/login.php");
}

$jsondata = file_get_contents("../data/jsondata.json");
$phpdata= json_decode($jsondata);
foreach($phpdata as $myobj)
{
    if($_SESSION["email"]==$myobj->email)
    {
        $fname= $myobj->fname."<br>";
        $lname= $myobj->lname."<br>";
        $email= $myobj->email."<br>";
    }
}


?>