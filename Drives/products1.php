<?php
session_start();
  if($_SESSION["username"]){
   // echo "Welcome, ".$_SESSION['username']."!";
	$connect = mysqli_connect('localhost','root','','revised') or die("Couldn't Connect");
$query = mysqli_query($connect,"SELECT * FROM addpdrive ");
  }
   else {
	   header("location: index.php");
   die("You must be Log in to view this page <a href='index.php'>Click here</a>");}
   
   
		
			?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SIRMVIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <style>
	
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text] {
    width: 40%;
    padding: 10px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus {
    background-color: #ddd;
    outline: none;
}
input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #36304a;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
	.cancelbtn {
    padding: 14px 20px;
    background-color: grey;
	width: 50%;
}



/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(29, 28, 28, 0.63);
	padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 25%; /* Could be more or less, depending on screen size */
}



 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
	
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: grey;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
	
	</style>
  
  <div class="site-wrap">
    
    <div class="site-section bg-light">
      <div class="container">
	   <a href="../Profilers/SProfile/login.php"><i class="fa fa-caret-square-o-left" style="font-size:48px" ></i></a>
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">DRIVES</h2>
          </div>
         
        </div>
	<?php
				
			while($row = mysqli_fetch_assoc($query))
				
			{
				?>
        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4"><?php echo $row['CompanyName'];?></h2>
                 <div class="badge-wrap">
                  <button class="bg-primary text-white badge py-2 px-4" onclick="myFunction1('<?php echo $row['ODetails']?>');document.getElementById('id01').style.display='block'" style="width:auto">See More</button>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-event6"></span> <?php echo $row['Date']?></a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span><?php echo $row['PVenue']?></span></div>
               </div>
              </div>

              <div class="ml-auto">
               
                <button class="btn btn-primary py-2" onclick="myFunction('<?php echo $row['CompanyName']?>');"  >Apply Job</button>
              </div>
           </div>

         </div>
        </div>
				
			<?php 
			}
		?>
			<div id="id01" class="modal">
	<span onclick="document.getElementById('id01').style.display='none';" class="close" title="Close Modal">&times;</span>
	<form class="modal-content" action="actionpage.php" method="POST">
	<div class="container">
      
	  
		     
      <label for="text"><b>Description :</b></label> 
	  <span id="Des"><input type="text" placeholder="" name="Compno" id="Compno" required style="width:100%"></input></span>
		<hr>
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">EXIT</button>
       
      </div>
    </div>
  </form>
</div>	



      </div>
    </div>    
</div>

    

    




  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

	<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it

function myFunction1(des) {
document.getElementById('Des').innerHTML=des;
}
function myFunction(cn) {
	
  window.location.href = "apply1.php?cn=" + cn; 
}

</script>
<script>
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		
		
	}
</script>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  <script src="js/main.js"></script>
    
  </body>
</html>