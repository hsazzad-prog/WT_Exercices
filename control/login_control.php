<?php

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
        $filedata=file_get_contents("../data/jsondata.json");
        $phpobj=json_decode($filedata);
        foreach($phpobj as $myobj)
        {
if($myobj->email==$_REQUEST["email"] && $myobj->password==$_REQUEST["password"])
{
   
    $match=1;
}
        }
        if($match==1)
        {
           header("Location: ../view/profile.php");
        }
        else{
            echo "login failed";
        }

    }

}


?>