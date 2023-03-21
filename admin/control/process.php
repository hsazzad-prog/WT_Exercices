<?php
include("../model/mydb.php");
$printcookie="";
setcookie("visit","1",time()+36000);
if(isset($_COOKIE["visit"]))
{
    $printcookie= "visited";
}
else
{
    $printcookie= "welcome";
}

$fnameerror="";
if(isset($_REQUEST["Submit"]))
{
$fname=$_REQUEST["firstname"];
$haserror=0;
if(empty($fname))
{
    $fnameerror= "name not found";
    $haserror=1;
}

if(empty($_REQUEST["lastname"]))
{
    $lnameerror= "name not found";
    $haserror=1;
}



if(isset($_REQUEST["gender"]))
{
    $gender=$_REQUEST["gender"];
    echo "<br>your gender is ". $gender;
}


if(!empty($_REQUEST["email"]))
{
   if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
    echo "<br>please enter a valid email address";
    $haserror=1;
}

}
else{
    echo "<br>Enter your email address";
    $haserror=1;

}


if(isset($_REQUEST["course"]))
{
    $course=$_REQUEST["course"];
    if($course=="Course")
    {
        echo "<br>please select a course";
        $haserror=1;
    }
   
   
}
else{
    echo "<br>your course is not set";
}
if(empty($_FILES["image"]["name"]))
{
    echo "enter a file";
    $haserror=1;
}
else{
    echo "<br>".$_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_REQUEST["email"].".jpg");
}
if($haserror==0)
{
$mydb= new MyDB();
$conobj= $mydb->openCon();
$result=$mydb->insertData("customer",$_REQUEST["firstname"],$_REQUEST["lastname"],
$_REQUEST["gender"],$_REQUEST["email"],$_REQUEST["pass"],$_REQUEST["course"],
"../uploads/".$_REQUEST["email"].".jpg",$conobj);
if($result===TRUE)
{
    echo "Success";
}
else
{
    echo "Error".$conobj->error;
}

// $existingdata=file_get_contents("../data/jsondata.json");
// $phpdata=json_decode($existingdata);
//     $formdata=array(
//         "fname"=>$_REQUEST["firstname"],
//         "lname"=>$_REQUEST["lastname"],
//         "gender"=>$_REQUEST["gender"],
//         "email"=>$_REQUEST["email"],
//         "password"=>$_REQUEST["pass"],
//         "course"=>$_REQUEST["course"],
//         "file"=>"../uploads/".$_REQUEST["email"].".jpg",
//     );
//     $phpdata[]=$formdata;

//     $jsondata=json_encode($phpdata,JSON_PRETTY_PRINT);

// if(file_put_contents("../data/jsondata.json",$jsondata))
// {
//     echo "file written successfully";
// }
// else{
//     echo "file written failed";
// }

// }

}

}

?>