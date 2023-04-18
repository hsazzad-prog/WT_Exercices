<?php 
include '../control/process.php';
?>

<html>  
<head>   
<title>  
Registration Page  
</title>  
</head>  
<body bgcolor="Lightskyblue">  
<?php include '../../layouts/header.php'; 

?>

<br>  
<br>
<script src="../js/myscript.js"></script>
<form action="" method="POST" enctype="multipart/form-data"
onsubmit="return validation()">  


 Firstname        
<input type="text" id="fname" name="firstname" size="15"/> 
<p id="fnameerror"></p>
<?php echo $fnameerror ?><br> <br>  
 Middlename:    
<input type="text" name="middlename" size="15"/> <br> <br>  
 Lastname:       
<input type="text" name="lastname" size="15"/> <br> <br>  
  
   
Course :  
   
<select name="course">  
<option value="Course">Course</option>  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
  
<br>  
<br>  
   
Gender :  
<br>  
<input type="radio" id="gender" name="gender" value="male"/> Male <br>  
<input type="radio" id="gender" name="gender" value="female"/> Female <br>  
<input type="radio" id="gender" name="gender" value="other"/> Other  
<p id="gendererror"></p>
<br>  

  

Phone :  

<input type="text" name="country code"  value="+91" size="2"/>   
<input type="text" name="phone" size="10"/> <br> <br>  
  
<br>  
<input type="file" name="image">
<br> <br>  
Email:  
<input type="text" id="email" name="email"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="pass" name="pass"> <br>   
<br> <br>  
Re-type password:  
<input type="Password" id="repass" name="repass"> <br> <br>  
<input type="submit" name="Submit" value="Submit"/>  
</form>  
<?php include '../../layouts/footer.php'; ?>
</body>  
</html>  
