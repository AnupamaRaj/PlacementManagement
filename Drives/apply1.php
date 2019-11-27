<?php
session_start();
//$compname=$_GET['cn'];


	$username=$_SESSION['username'];
	//echo $username;
	$cn= strtolower($_GET['cn']);
	//echo $cn;
	$connect=mysqli_connect('localhost','root','','revised');
	
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
			if($query){ echo "<center>successful...!!</center>";echo "<script>setTimeout(\"location.href = 'products1.php';\",1500);</script>";}
			else echo "epic fail";
			
			
		

		
		
	

?>