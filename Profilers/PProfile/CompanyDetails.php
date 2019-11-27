<?php
  session_start();
 if (isset($_SESSION['pusername'])){
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
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    

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
             
            <li><a href="login.php" class="active"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>           
            <li><a href="Studentviews.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
            
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
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a  class="white-text templatemo-sort-by">Company Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Date </a></td>
                    <td><a  class="white-text templatemo-sort-by">C/P</a></td>
                    <td><a  class="white-text templatemo-sort-by">PVenue</a></td>
					   <td><a  class="white-text templatemo-sort-by">SSLC</a></td>
<td><a  class="white-text templatemo-sort-by">PU/Dip </a></td>
   <td><a  class="white-text templatemo-sort-by">BE</a></td>               
   <td><a  class="white-text templatemo-sort-by">Backlogs</a></td>
   <td><a  class="white-text templatemo-sort-by">History of Backlogs</a></td>
			      <td><a  class="white-text templatemo-sort-by">Deatin years</a></td>
			      <td><a class="white-text templatemo-sort-by">Others details </a></td>
				  </thead>
			   </tr>
			   <?php
			
$num_rec_per_page=15;
$connect=mysqli_connect('localhost','root','','revised');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM addpdrive ORDER BY Date Desc LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query ($connect,$sql); //run the query
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) 
{ 

            print "<tr>"; 
 
print "<td>" . $row['CompanyName'] . "</td>"; 
print "<td>" . $row['Date'] . "</td>"; 
print "<td>" . $row['C/P'] . "</td>"; 
print "<td>" . $row['PVenue'] . "</td>"; 
print "<td>" . $row['SSLC'] . "</td>"; 
print "<td>" . $row['PU/Dip'] . "</td>"; 
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";
print "<td>" . $row['ODetails'] . "</td>";

print "</tr>"; 

}
?> 

                </tbody>
              </table>  
			  </div>
			  </div>
			  </div>



                
          <footer class="text-right">
           		
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>