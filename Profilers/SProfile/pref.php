<?php
  session_start();
  if($_SESSION["username"]){
   // echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}
   
?>
<?php
$connect = mysqli_connect('localhost','root','','revised') or die("Couldn't Connect"); // Selecting Database from Server
if(isset($_POST['add']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History']; 
$detyear = $_POST['Dety'];

if($hisofbk=='N')
	$hisfbk=0;
else
	$hisfbk=1;

//echo $date;
if($USN !=''||$email !='')
{
	if($USN == $sun)
    {
    if($query = mysqli_query($connect,"INSERT INTO `basicdetails` ( `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`) 
          VALUES ('$fname', '$lname', '$USN', '$phno', '$email', '$date', '$cursem', '$branch', '$per', '$puagg', '$beaggregate', '$back', '$hisfbk', '$detyear')"))
    {
				echo "<center>Details has been received successfully...!!</center>";
				
				echo "<script>setTimeout(\"location.href = 'preferences.php';\",1500);</script>";
				//header("location: preferences.php");
      }
	  
     
		else echo "FAILED";
}

else{
	  echo "<center>enter your USN only...!!</center>";
}
}

}
?>


<?php
$connect = mysqli_connect('localhost','root','','revised') or die("Couldn't Connect"); // Selecting Database from Server
if(isset($_POST['update']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History']; 
$detyear = $_POST['Dety'];

if($hisofbk=='N')
	$hisfbk=0;
else
	$hisfbk=1;

if($USN !=''||$email !='')
{
	if($USN == $sun)
	{
		
	$sql = mysqli_query($connect,"SELECT * FROM `revised`.`basicdetails` WHERE `USN`='$USN'");
	if(mysqli_num_rows($sql) == 1)
	{
  
		if($query = mysqli_query($connect,"UPDATE `basicdetails` SET `FirstName`='$fname', `LastName`='$lname', `Mobile`='$phno', `Email`='$email', `DOB`='$date', `Sem`='$cursem', `Branch`= '$branch', `SSLC`='$per', `PU/Dip`='$puagg', `BE`='$beaggregate', `Backlogs`='$back', `HofBacklogs`='$hisfbk', `DetainYears`='$detyear' 
           WHERE `basicdetails`.`USN` = '$USN'"))
               {
				echo "<center>Data Updated successfully...!!</center>";
				echo "<script>setTimeout(\"location.href = 'preferences.php';\",1500);</script>";
				//header("location: preferences.php");
               }
	  
            else echo "<center>FAILED</center>";
		
	}	
	else echo "<center>NO record found for update</center>";
	}
else
	echo "<center>enter your usn only</center>";
}


}
?>