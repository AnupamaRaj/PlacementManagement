<?php
  session_start();
  if($_SESSION["username"]){
    $user=$_SESSION["username"];
	//echo $user;
  }
   else {
	   header("location: index.php");
  }
  
$connect = mysqli_connect('localhost','root','','revised') or die("Couldn't Connect");
$query = mysqli_query($connect,"SELECT * FROM addpdrive ");


?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
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
        <div class="profile-photo-container">
          
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
       
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
              <a href="../../Drives/Products1.php"><i class="fa fa-bar-chart fa-fw"></i>Placement Drives</a>
            </li>
            <li>
              <a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Update Details</a>
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
                  <a href="logout.php";>SIGN OUT</a>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
       
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
               
                <div class="panel-heading templatemo-position-relative">
                  <h2 class="text-uppercase">COMPANIES YOU APPLIED</h2>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>Company Name</td>
                        <td>Date</td>
                        <td>Venue</td>
                        <td>Details</td>
                      </tr>
                    </thead>
                    <tbody>
				<?php 
					 while($row = mysqli_fetch_assoc($query))
					{
						$tab_name = strtolower($row['CompanyName']);
						$query1 = "SELECT * FROM `$tab_name`";
						//echo $query1;
						$sql=mysqli_query($connect,$query1);
						//$row1 = mysqli_fetch_assoc($sql);
						//echo $row1['USN'];
					
						while($row1 = mysqli_fetch_assoc($sql) )
						{
							if($row1['USN']==$user){
					?>
                      <tr>
                        <td><?php echo $row['CompanyName'] ?></td>
                        <td><?php echo $row['Date'] ?></td>
                        <td><?php echo $row['PVenue'] ?></td>
                        <td><?php echo $row['ODetails'] ?></td>
                      </tr>
							<?php }
else continue;							}}?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Second row ends -->
           
        </div>
      </div>
    </div>
	  <footer class="text-right">
           		<p>Copyright &copy; 2019 SIR-MVIT | Developed by AAA
              
			  </p>
          </footer>
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!-- jQuery Migrate Plugin -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>