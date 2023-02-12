<?php
$fname=$_REQUEST["firstname"];

if(empty($fname))
{
    echo "name not found";
}
else{
echo "your first name is ". $fname;
}

if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
    echo "<br>your gender is ". $gender;
}
else{
    echo "<br>your gender is not set";
}

if(empty($_REQUEST["email"]))
{
   if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
    echo "<br>please enter a valid email address";
}
else{
    echo "<br>your email address is".$_REQUEST["email"];
}
}
else{
    echo "<br>your gender is not set";
}


if(isset($_REQUEST["course"]))
{
    $course=$_REQUEST["course"];
    if($course=="Course")
    {
        echo "<br>please select a course";
    }
    else{
        echo "<br>your course is ". $course;
    }
   
}
else{
    echo "<br>your course is not set";
}


?>