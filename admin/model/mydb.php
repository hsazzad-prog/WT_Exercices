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


}


?>