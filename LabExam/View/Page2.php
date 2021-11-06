<?php
session_start();
?>
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
  <h2>Education</h2>
<hr style="width:50%;text-align:left;margin-left:0">
<form method="POST" action="">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">University :</label>
    <div class="col-sm-10">
      <input type="text"class="form-control col-sm-2" name="university" id="">
    </div>
  </div>


 <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Degree :</label>
    <div class="col-sm-10">
      <input type="text"class="form-control col-sm-2" name="degree" id="">
    </div>
  </div>

   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Major :</label>
    <div class="col-sm-10">
      <input type="text"class="form-control col-sm-2" name="mojor" id="">
    </div>
  </div>

   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Results :</label>
    <div class="col-sm-10">
      <input type="number"class="form-control col-sm-2" name="results" id="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Passing Year :</label>
    <div class="col-sm-10">
      <input type="date" class="form-control col-sm-2" name="passingYear" id="">
    </div>
  </div>


<div class="form-group row abc">
<button type="button" type="submit" class="btn btn-outline-success"><a href="message.php">Submit</a> </button>
  </div>


</form>
</div>
</html>