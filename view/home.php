<html>  
<head>   
<title>  
Registration Page  
</title>  
</head>  
<body bgcolor="Lightskyblue">  
<br>  
<br>  
<form action="../control/process.php" method="POST">  


 Firstname        
<input type="text" name="firstname" size="15"/> <br> <br>  
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
<input type="radio" name="gender" value="male"/> Male <br>  
<input type="radio" name="gender" value="female"/> Female <br>  
<input type="radio" name="gender" value="other"/> Other  
<br>  
<br>  
  

Phone :  

<input type="text" name="country code"  value="+91" size="2"/>   
<input type="text" name="phone" size="10"/> <br> <br>  
  
<br>  
<br> <br>  
Email:  
<input type="text" id="email" name="email"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="pass" name="pass"> <br>   
<br> <br>  
Re-type password:  
<input type="Password" id="repass" name="repass"> <br> <br>  
<input type="submit" value="Submit"/>  
</form>  
</body>  
</html>  
<?php
echo "<h1>hello from php</h1>";
?>  
