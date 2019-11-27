<?php
$connect = mysqli_connect('localhost','root','','revised') or die("Couldn't Connect"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$cname = $_POST['compny'];
$date = $_POST['date'];
$campool = $_POST['campool'];
$poolven = $_POST['pcv'];
$per = $_POST['sslc'];
$puagg = $_POST['puagg'];
$beaggregate = $_POST['beagg'];
$back = $_POST['curback'];
$hisofbk = $_POST['hob'];
$breakstud = $_POST['break'];
$otherdet = $_POST['odetails'];
if($hisofbk=='N')
	$hisfbk=0;
else
	$hisfbk=1;

if($cname !=''||$date !='')
{
    if($query = mysqli_query($connect,("INSERT INTO `addpdrive`(`CompanyName`,`Date`,`C/P`,`PVenue`,`SSLC`,`PU/Dip`,`BE`,`Backlogs`,`HofBacklogs`,`DetainYears`,`ODetails`)
		VALUES ('$cname', '$date', '$campool', '$poolven', '$per', '$puagg', '$beaggregate', '$back', '$hisfbk', '$breakstud', '$otherdet')")))
		{
                      $sql="CREATE TABLE `revised`.`$cname` (
							  `FirstName` varchar(25) NOT NULL,
							  `LastName` varchar(25) NOT NULL,
							  `USN` varchar(10) NOT NULL,
							  `Mobile` bigint(11) NOT NULL,
							  `Email` varchar(255) NOT NULL,
							  `DOB` date NOT NULL,
							  `Sem` int(11) NOT NULL,
							  `Branch` varchar(15) NOT NULL,
							  `SSLC` float NOT NULL,
							  `PU/Dip` float NOT NULL,
							  `BE` float NOT NULL,
							  `Backlogs` int(11) NOT NULL,
							  `HofBacklogs` tinyint(1) NOT NULL,
							  `DetainYears` int(11) NOT NULL,
							  PRIMARY KEY (`USN`)
							  
						) ENGINE=InnoDB DEFAULT CHARSET=latin1";
						if(mysqli_query($connect,$sql)) 
							echo "<center>Drive Inserted successfully</center>";
						else
							echo "epic fail";
						
						echo "<script>setTimeout(\"location.href = 'login.php';\",1500);</script>";
					  //header("location: login.php");
		}
		else die("FAILED");
}
}
?>