<?php
     include("../Model/database.php");
    
if($_SERVER["REQUEST_METHOD"] == "POST")
{


  
    $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery=$connection->insertuser($conobj,"emp",$uname,$password,$fname,$mobile,$dob,$university,$degree,$major,$results,$passingYear);
        
                 if($userQuery===TRUE)
                 {
                     $error = "Data Inserted!!!";
                 }
                 else 
                 {
                     $error = "Data is not inseted".$conobj->error;
                 }
                 $connection->CloseCon($conobj);
          

  
}




?>
