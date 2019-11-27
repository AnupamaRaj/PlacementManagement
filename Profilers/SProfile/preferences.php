<?php
  session_start();
  if($_SESSION["username"]){
   // echo "Welcome, ".$_SESSION['username']."!";
	
  }
   else {
	   header("location: index.php");
   die("You must be Log in to view this page <a href='index.php'>Click here</a>");}
   
   $pusername=$_SESSION["username"];
   $connect = mysqli_connect('localhost','root','','revised') or die("Couldn't Connect");
		//mysql_select_db("revised") or die("Cant find DB");
		$sql="SELECT * FROM `basicdetails` WHERE USN='$pusername'";
		if($query = mysqli_query($connect,$sql))
		{
			$row = mysqli_fetch_assoc($query);
		
			$fname=$row['FirstName'];
			$lname=$row['LastName'];
			$usn=$row['USN'];
			$mob=$row['Mobile'];
			$email=$row['Email'];
			$dob=$row['DOB'];
			$sem=$row['Sem'];
			$branch=$row['Branch'];
			$sslc=$row['SSLC'];
			$pu=$row['PU/Dip'];
			$be=$row['BE'];
			$bcklog=$row['Backlogs'];
			$hofb=$row['HofBacklogs'];
			$detyear=$row['DetainYears'];
			
			
			
			if($hofb==0)
				$hof='N';
			else 
				$hof='Y';
		}
		else{
			echo "failed";
		}
			?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!--favicon-->
        
      
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIRMVIT</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
         
		  <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
		  ?>
        </header>
        
        <!-- Search box -->
       
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
              <a href="../../Drives/Products1.php"><i class="fa fa-bar-chart fa-fw"></i>Placement Drives</a>
            </li>
            <li>
              <a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Update Details</a>
            </li>
          
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                
                <li>
                  <a href="logout.php">SIGN OUT</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
		
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Update Your Details</h2>
          
            <form action="pref.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputFirstName">First Name</label>
                  <input type="text" name="Fname" class="form-control" id="inputFirstName" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputLastName">Last Name</label>
                  <input type="text"  name="Lname" class="form-control" id="inputLastName" placeholder="">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="usn">USN</label>
                  <input type="text" name="USN" class="form-control" id="usn" placeholder="1MV15*****" >
                </div>
               
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Phone">Phone:</label>
                  <input type="text" name="Num" class="form-control" id="Phone" placeholder="91xxxxxxxx">
                </div>
				
				 <div class="col-lg-6 col-md-6 form-group">
                  <label for="Email">Email</label>
                  <input type="Email" name="Email" class="form-control" id="Email" placeholder="abc@example.com">
                </div>
				
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="DOB">Date of Birth</label>
                  <input type="date" name="DOB" class="form-control" id="DOB" placeholder="YYYY/MM/DD">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Semester</label>
                  <select name="Cursem" id="cs" class="form-control">
                    <option value="select">Semester</option>
                    
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
				  </div>
				  
				
				  <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Branch of Study</label>
                  <select name="Branch" class="form-control" id="bos">
                    <option value="select">Branch</option>
                   
                    <option value="ISE">ISE</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CVE">CVE</option>
                  </select>
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="sslc">SSLC/10th Aggregate</label>
                  <input type="text" name="Percentage" class="form-control" id="sslc" placeholder="">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Pu">12th/Diploma Aggregate</label>
                  <input type="text" name="Puagg" class="form-control" id="Pu" placeholder="">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="BE">BE Aggregate</label>
                  <input type="text" name="Beagg" class="form-control" id="BE" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Backlogs</label>
                  <select name="Backlogs" class="form-control"id="cb">
                    <option value="select">Numbers</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">History of Backlogs</label>
                  <select name="History" class="form-control" id="hofb">
                    <option value="Y/N">Y/N</option>
                    <option value="Y">Y</option>
                    <option value="N">N</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Detained Years</label>
                  <select name="Dety" class="form-control" id="dy">
                    <option value="select">Years</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                
              </div>               
              </div>
			  <script>
			  document.getElementById("inputFirstName").value='<?php echo $fname?>';
			  document.getElementById("inputLastName").value='<?php echo $lname?>';
			  document.getElementById("usn").value='<?php echo $usn?>';
			  document.getElementById("Phone").value='<?php echo $mob?>';
			  document.getElementById("Email").value='<?php echo $email?>';
			  document.getElementById("DOB").value='<?php echo $dob?>';
			  document.getElementById("cs").value='<?php echo $sem?>';
			  document.getElementById("bos").value='<?php echo $branch?>';
			  document.getElementById("sslc").value='<?php echo $sslc?>';
			  document.getElementById("Pu").value='<?php echo $pu?>';
			  document.getElementById("BE").value='<?php echo $be?>';
			  document.getElementById("cb").value='<?php echo $bcklog?>';
			  document.getElementById("hofb").value='<?php echo $hof?>';
			  document.getElementById("dy").value='<?php echo $detyear?>';
			  </script>
			  
              
              <div class="form-group text-right">
                
				<button type="submit"  name="add" class="templatemo-blue-button">add</button>
				<button type="submit"  name="update" class="templatemo-blue-button">update</button>
               
              </div>
            </form>
          </div>
          <footer class="text-right">
           		<p>Copyright &copy; 2019 SIR-MVIT | Developed by AAA
             
			  </p>
          </footer>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>