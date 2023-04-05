<?php
include "../control/profile_process.php";
?>
<html>
<head>   
<title>  
Profile Page  
</title>  
</head>  
<body bgcolor="green">  
<?php include '../../layouts/header.php';?>

hellow 
<?php

echo $_SESSION["email"]; ?>

<br>
<br>
<hr>
<a href="showalluser.php"> Show All User </a>


<br>First Name: <?php echo $fname; ?>
<br>Last Name: <?php echo $lname; ?>
<br>Email: <?php echo $email; ?>
<br>Gender: <?php echo $gender; ?>
<br>Course: <?php echo $course; ?>
<br>Profile pic: <br>
<img src="<?php echo $file; ?>" width="100px" height="100px">

<br>
<br>
<a href="../control/logout.php">log out </a>
<?php include '../../layouts/footer.php';?>
<body>
</html>