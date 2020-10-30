<?php
  session_start();
 if (isset($_SESSION['priusername'])){
    echo "Welcome, ".$_SESSION['priusername']."!";
  }
   else {
	   header("location: index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOD - Preferences</title>
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
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['priusername']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.png" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
           <ul>
          <li><a href="login.php" ><i class="fa fa-home fa-fw" class="active"></i>Dashboard</a></li>
            <li><a href="Students Eligibility.php"><i class="fa fa-bar-chart fa-fw"></i>Check Students Eligibility</a></li>
            <li><a href="manage-users.php" ><i class="fa fa-users fa-fw"></i>Student Details</a></li>
            <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
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
                  <a href="../../Homepage/index.php">Home</a>
                </li>
                <li>
                  <a href="Notif.php">Notification</a>
                </li>
                <li>
                  <a href="Change Password.php">Change Password</a>
                  </li>
              </ul>  
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            
			<center><h2 class="margin-bottom-10">Read Message</h2>
            <p>Notifications from Placement Department and Principal</p></center>
            <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                   <td><a  class="white-text templatemo-sort-by">Subject </a></td>
                   <td><a  class="white-text templatemo-sort-by">Message </a></td>
                  </thead>
               </tr>
               <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notify";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `hnotice`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    print "<tr>";
    print "<td>" . $row['subject'] . "</td>";
    print "<td>" . $row['message'] . "</td>";
    print "</tr>";
    }
} else {
  echo "0 results";
}

mysqli_close($conn);

?> 

                </tbody>
              </table>  
              
          </div>
          <footer class="text-right">
                <p>Copyright &copy; 2020 MUJ PLACEMENT COORDINATOR </p>
                    <p>Developed by STUDENTS OF BCA</p>
        </p>
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
