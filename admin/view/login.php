<?php
include ('../control/login_control.php');
?>

<html>
<head>   
<title>  
Login Page  
</title>  
<link rel="stylesheet" type="text/css" href="../../css/mystyle.css">
</head>

<body bgcolor="white">  
<?php include '../../layouts/header.php';?>
<div>
<form action="" method="POST">
<h5 id="pcustome">Email:</h5> <input type="text" name="email">
<p id="pcustome">Password:</p> <input type="password" name="password">
<br>
<input type="submit" class="button submit" name="login" value="Log In">
<input type="reset" class="button reset" name="login" value="Reset">
</form>
</div>
<?php include '../../layouts/footer.php';?>
</body>

</html>