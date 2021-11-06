<?php 
    include("../Control/registrationcheck.php");

?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
  .bodyDesign{
    margin: 40 40 40 40;
  }
  .abc{
    margin: 20 20 20 2;
  }
</style>
<div class="bodyDesign">
  <h2>Personal Details</h2>
<hr style="width:50%;text-align:left;margin-left:0">
<form method="POST" action="Page2.php">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" >User Name :</label>
    <div class="col-sm-10">
      <input type="text"class="form-control col-sm-2" name="uname" id="">
    </div>
  </div>


 <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Password :</label>
    <div class="col-sm-10">
      <input type="password"class="form-control col-sm-2" name="password" id="">
    </div>
  </div>

   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Full Name :</label>
    <div class="col-sm-10">
      <input type="text"class="form-control col-sm-2" name="fname" id="">
    </div>
  </div>

   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Mobile No :</label>
    <div class="col-sm-10">
      <input type="number"class="form-control col-sm-2" name="mobile" id="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Date of Birth :</label>
    <div class="col-sm-10">
      <input type="date" class="form-control col-sm-2" name="dob" id="">
    </div>
  </div>


<div class="form-group row abc">
<button type="button" type="submit" class="btn btn-outline-primary"><a href="Page2.php">Next</a></button>
  </div>


</form>
</div>
</html>