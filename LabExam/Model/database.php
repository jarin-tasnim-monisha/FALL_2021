<?php
class db{
 
function OpenCon()
   {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "mydb2";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
   }


function insertuser($conn,$table,$uname,$password,$fname,$mobile,$dob,$university,$degree,$major,$results,$passingYear)
    {
      $result = $conn->query("INSERT INTO $table (userName,password,fullName,mobileNo,DOB,university,degree,major,results,passingYear) VALUES ('$uname','$password','$fname','$mobile','$dob','$university',
         '$degree','$major','$results','$passingYear')");
      return $result;
      header("../View/message.php");
    }

function CloseCon($conn)
   {
      $conn -> close();
   }
}

?>  