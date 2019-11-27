<?php
  session_start();
  if(($_SESSION["pusername"])){
    
  }
   else {
	   header("location: index.php");
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
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
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
		  $Welcome = "Welcome!";
          echo "<h1>" . $Welcome . "<br></h1>";
		   echo "<br>";
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
            
            <li><a href="login.php" ><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>          
            <li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>View Students</a></li>
           
           
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                 
                 <li><a href="logout.php">Sign Out</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
           <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="templatemo-content-widget orangee-bg">
                               
                <div class="media">
                  <div class="media-left">
                    <a href="manage-users.php">
                      <img class="media-object img-circle" src="images/sunset11.png" alt="Sunset" width="100px" height="100px">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Branch Wise</h2>
                    <p>View of the students applied for various companies branch wise</p>  
                  </div>        
                </div>                
              </div> 
				
				<div class="templatemo-content-widget orangeeee-bg">
                            
                <div class="media">
                  <div class="media-left">
                    <a href="comanywise.php">
                      <img class="media-object img-circle" src="images/sunset33.jpg" alt="Sunset" width="100px" height="100px">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Company wise</h2>
                    <p>View of the students applied for various companies</p>  
                  </div>        
                </div>                
              </div> 			  
			</div>
			</div>
            </div>
          </div>
          <footer class="text-right">
            <p>Copyright &copy; 2019 SIR-MVIT
            | Designed by AAA</p>
          </footer>       
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>
