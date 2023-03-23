<?php
class MyDB{

function openCon(){
$conn = new mysqli("localhost","root","","secg");
return $conn;
}
function insertData($tablename, $firstname,$lastname,$gender,$email,
$password,$course,$file,$conn){
$sql="INSERT INTO $tablename (firstname,lastname,gender, email,password
,course, file) VALUES ('$firstname','$lastname','$gender','$email',
'$password','$course','$file')";
$result=$conn->query($sql);
return $result;
}
function checkUser($tablename, $email, $password, $conn){
    $sql="SELECT * FROM $tablename WHERE email='$email' AND 
    password='$password'";
    $result=$conn->query($sql);
return $result;
}

}


?>