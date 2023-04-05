<?php
include "../control/showalluser_process.php";
?>

<html>
<head>   
<title>  
Profile Page  
</title>  
</head>  
<body bgcolor="green">  
<?php

if($result->num_rows > 0)
{
   echo "<table>";
  echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Gender</th>
  <th>Course</th><th>File</th></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr>";
    echo "<td>".$row["firstname"]."</td>";
    echo "<td>".$row["lastname"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["gender"]."</td>";
    echo "<td>".$row["course"]."</td>";
    echo "<td>".$row["file"]."</td>";
    echo "<td>"."<a href='updateuser.php?email=".$row["email"]."'>Edit</a>"."</td>";
    echo "<td>"."<a href='deleteuser.php?email=".$row["email"]."'>Delete</a>"."</td>";
    echo "</tr>";
    }
    echo "</tr>";
}
else
{
    echo "no data available";
}

?>



</body>
    <html>