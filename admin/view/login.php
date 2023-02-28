<?php
include ('../control/login_control.php');
?>

<html>
<head>   
<title>  
Login Page  
</title>  
</head>  
<body bgcolor="white">  
<?php include '../../layouts/header.php';?>
<form action="" method="POST">
Email: <input type="text" name="email">
Password: <input type="password" name="password">
<input type="submit" name="login" value="Log In">
</form>

<?php include '../../layouts/footer.php';?>
</body>

</html>