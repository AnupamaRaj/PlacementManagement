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
         <ul>
            
            <li><a href="login.php"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>           
            <li><a href="StudentViews" class="active"><i class="fa fa-users fa-fw"></i>View Students</a></li>
           
           
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
	
          
		
              
			  <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
				 
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>USN</td>
                    <td>Mobile</td>
					<td>Email</td>
                    
					<td>SSLC </td>
					<td>PU/Dip</td>
					<td>BE</td>
					<td>Backlogs</td>
				    <!--<td>History Of Backlogs</td>-->
				    
				    
				  </thead>
			   </tr>
			   
<?php
		
$num_rec_per_page=15;
$connect=mysqli_connect('localhost','root','','revised');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$query = mysqli_query($connect,"SELECT CompanyName FROM addpdrive ");

//$tab_name = strtolower($row['CompanyName']);
//$query1 = "SELECT * FROM `$tab_name`";
//$sql=mysqli_query($connect,$query1);
while ($row = mysqli_fetch_assoc($query)) 
{ 
print "<tr><td>".$row['CompanyName']."<td><tr>";
$tab_name = strtolower($row['CompanyName']);
$query1 = "SELECT * FROM `$tab_name`";
$sql=mysqli_query($connect,$query1);
while ($row = mysqli_fetch_assoc($sql)) 
{ 
	print "<tr>"; 
	print "<td>" . $row['FirstName'] . "</td>"; 
	print "<td>" . $row['LastName'] . "</td>"; 
	print "<td>" . $row['USN'] . "</td>"; 
	print "<td>" . $row['Mobile'] . "</td>"; 
	print "<td>" . $row['Email'] . "</td>";
	print "<td>" . $row['SSLC'] . "</td>"; 
	print "<td>" . $row['PU/Dip'] . "</td>"; 
	print "<td>" . $row['BE'] . "</td>";
	print "<td>" . $row['Backlogs'] . "</td>";
	//print "<td>" . $row['HofBacklogs'] . "</td>";
	print "</tr>"; 
}
}

?> 

</tbody>
</table>  
</div>
</div>
</div>


  <div class="pagination-wrap">
  <ul class="pagination">
			  
</ul>
</div>
        <footer class="text-right">
            <p>Copyright &copy; 2019 SIR-MVIT
            | Developed by AAA</p>
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