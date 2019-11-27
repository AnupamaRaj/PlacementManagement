<?php
session_start();
//$compname=$_SESSION['cn'];
//echo $compname;
//$cn=strtolower($compname);
//echo $cn;
if (isset($_POST['login'])) 
{
	$username=$_POST['email'];
	//echo $username;
	$password=$_POST['password'];
	$cn= strtolower($_POST['anu']);
	//echo $cn;
	$connect=mysqli_connect('localhost','root','','revised');
	
	$sql = "SELECT PASSWORD FROM `slogin` WHERE USN='$username'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($result);
	$rs = $row['PASSWORD'];


		if($rs==$password)
		{
			echo "<center>login successful<center><br><br>";
			$query="SELECT * FROM `basicdetails` WHERE USN='$username'";
			//echo $query;
			$result = mysqli_query($connect,$query);
			$row = mysqli_fetch_assoc($result);
			
			$fname = $row['FirstName'];
			$lname = $row['LastName'];
			$USN = $row['USN'];
			$phno = $row['Mobile'];
			$email = $row['Email'];
			$date = $row['DOB'];
			$cursem = $row['Sem'];
			$branch = $row['Branch'];
			$per = $row['SSLC'];
			$puagg = $row['PU/Dip'];
			$beaggregate = $row['BE'];
			$back = $row['Backlogs'];
			$hisofbk = $row['HofBacklogs']; 
			$detyear = $row['DetainYears'];
			

			
			$query1 = "INSERT INTO `$cn` ( `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`) 
          VALUES ('$fname', '$lname', '$USN', '$phno', '$email', '$date', '$cursem', '$branch', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$detyear')";
			$res=mysqli_query($connect,$query1);
			//echo $query1;
			if($query) echo "<center> successful...!!</center>"; else echo "epic fail";
			echo "<script>setTimeout(\"location.href = 'products.php';\",1500);</script>";
			
		}

		else
			echo "<script type='text/javascript'>alert('Incorrect Username Or Password'); window.location = 'index.html';</script>";
		
	
}
?>