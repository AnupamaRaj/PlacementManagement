<?php
   $connect = mysqli_connect("localhost", "root", "", "revised"); // Establishing Connection with Server
   
   
   
if(isset($_POST['submit']))
{ 
  
 
 $USN = $_POST['USN'];
 $password = $_POST['PASSWORD'];
 $repassword = $_POST['repassword'];
 $Email = $_POST['Email'];
  $Question = $_POST['Question'];
   $Answer = $_POST['Answer'];
  

 $check = mysqli_query($connect,"SELECT * FROM slogin WHERE USN='".$USN."'") or die("Check Query");
 if(mysqli_num_rows($check) == 0) 
 {
  if($repassword == $password)
  {
    
    
    if($query = mysqli_query($connect,"INSERT INTO slogin(USN ,PASSWORD,Email,Question,Answer) VALUES ('$USN', '$password','$Email','$Question','$Answer')"))
    {
                       echo "<center> You have registered successfully...!! Go back to  </center>";
					             echo "<center><a href='index.php'>Login here</a> </center>";
					   
    }
  }
   else
    {
       echo "<center>Your password do not match</center>";
    }
   }
   else
   {
       echo "<center>This USN already exists</center>"; 
  }
}
?>