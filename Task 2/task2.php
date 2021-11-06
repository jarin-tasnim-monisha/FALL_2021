<?php include "new.php"; ?>
<!DOCTYPE html>
<html>
<head>
<tittle>Registration Form </tittle>
<br>
<br>

</head>
<body>
    <!--forms-->

<br>
<!-- text -->
<form action="" method="post">
<label> First Name </label> 
<input type="text" name = "name" > <?php echo $validatename; ?>
<br>
<label> Last Name </label> 
<input type="text" name = "name1"> <?php echo $validatename; ?>
<br>
<label> Age </label> 
<input type="   number" name = "number" placeholder="Enter your age"  >  <br>
<br>
<P>Designation: </p>

<input type="radio"  name="fav_language" value="HTML">Junior Programmer
  <br>
  <input type="radio" name="fav_language" value="CSS">senior programmer
  <br>
  <input type="radio"  name="fav_language" value="JavaScript"> ptoject lead
  <?php echo $validateradio; ?>
<br>
   <!--Checkbox  -->
<br>
<br>
<br>
<P>Preferred languages:  </p>
 <input type="checkbox"  name="a" value="JAVA">
 JAVA
  <br>
  <input type="checkbox"  name="b" value="PHP">
  
  PHP
   
  <br>
  <input type="checkbox"  name="c" value="C++">
  C++
  <?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>

  <br>
  <br>
  Enter your email:
  <input type="email" name="email">
  <br>
  <br>
  <label for="pass">Password:</label>
  <input type="text" id="pass" name="pass"><br><br>
  <input type="hidden" id="custId" name="custId" value="3487">
  <?php echo $validateemail; ?>
<br>

  <p>Select a file: </p>
  <input type="file" name="myfile">
  <br>
  <br>
  <input type="submit" value="Submit">
  
<input type="reset"><br>
<br>
</form>



</body>
</html>