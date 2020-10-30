<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
        <title>Home</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
        <link rel="stylesheet" href="css/templatemo-style.css" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body id="page-top">
        
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background:black">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="https://jaipur.manipal.edu/">Manipal University Jaipur</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="../Profilers/SProfile/index.php">Student Login</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../Profilers/HODProfile/index.php">HOD Login</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../Profilers/PProfile/index.php">Placement Login</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../Profilers/PriProfile/index.php">Administrative Login</a>
                        </li>
                    </ul>
                
            </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
               <li><a href="../../Homepage/index.php">Home</a></li>
                <li><a href="Notif.php">Notifications</a></li>
                <li><a href="Change Password.php">Change Password</a></li>
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
                   <td><a  class="white-text templatemo-sort-by">10th</a></td>
                   <td><a  class="white-text templatemo-sort-by">12th</a></td>
                   <td><a  class="white-text templatemo-sort-by">Graduation</a></td>               
                   <td><a  class="white-text templatemo-sort-by">Backlogs</a></td>
                   <td><a  class="white-text templatemo-sort-by">History of Backlogs</a></td>
                   <td><a  class="white-text templatemo-sort-by">Detain years</a></td>
                   <td><a class="white-text templatemo-sort-by">Others details </a></td>
                  </thead>
               </tr>
               <?php
$num_rec_per_page = 15;
$connect = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connect, 'details');
if (isset($_GET["page"]))
{
    $page = $_GET["page"];
}
else
{
    $page = 1;
};
$start_from = ($page - 1) * $num_rec_per_page;
$sql = "SELECT * FROM addpdrive ORDER BY Date Desc LIMIT $start_from, $num_rec_per_page";
$rs_result = mysqli_query($connect, $sql); //run the query

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


  <div class="pagination-wrap">
  <ul class="pagination">
              <?php

$num_rec_per_page = 15;
$connect = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connect, 'details');
$sql = "SELECT * FROM addpdrive ORDER BY Date Desc";
$rs_result = mysqli_query($connect, $sql); //run the query
$total_records = mysqli_num_rows($rs_result); //count number of records
$totalpage = ceil($total_records / $num_rec_per_page);

$currentpage = (isset($_GET['page']) ? $_GET['page'] : 1);
if ($currentpage == 0)
{

}
else if ($currentpage >= 1 && $currentpage <= $totalpage)
{

    if ($currentpage > 1 && $currentpage <= $totalpage)
    {

        $prev = $currentpage - 1;
        echo "<li><a  href='CompanyDetails.php?page=" . $prev . "'><</a></li>";

    }

    if ($totalpage > 1)
    {
        $prev = $currentpage - 1;
        for ($i = $prev + 1;$i <= $currentpage + 2;$i++)
        {
            echo "<li><a href='CompanyDetails.php?page=" . $i . "'>" . $i . "</a></li>";
        }
    }

    if ($totalpage > $currentpage)
    {
        $nxt = $currentpage + 1;
        echo "<li><a  href='CompanyDetails.php?page=" . $nxt . "' >></a></li>";
    }

    echo "<li><a>Total Pages:" . $totalpage . "</a></li>";
}
?> 
</ul>
</div>
        <div class="footer">
      <div class="container">
        <div class="col-md-3 ftr_navi ftr">
          <h3>NAVIGATION</h3>
          <ul>
            <li>
              <a href="../Homepage/index.php">Home</a>
            </li>
            <li>
              <a href="../Profilers/SProfile/index.php">Student Login</a>
            </li>
            <li>
              <a href="../Profilers/PProfile/index.php">Placement Login</a>
            </li>
            <li>
              <a href="../Profilers/HODProfile/index.php">HOD Login</a>
            </li>
            <li>
              <a href="../Profilers/Priprofile/index.php">Administrative Login</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 ftr_navi ftr">
          <h3>MEMBERS</h3>
          <ul>

            <li>
              <a href="#">Placement Support</a>
            </li>
            <li>
              <a href="#">Faculty Support</a>
            </li>
            <li>
              <a href="#">Registered Companies</a>
            </li>
            <li>
              <a href="#">Training</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 get_in_touch ftr">
          <h3>GET IN TOUCH</h3>
          <p>Manipal University Jaipur</p>
          <p>Dehmi Kalan, Off Jaipur-Ajmer Expressway,</p>
          <p>0141-3999100 (Extn: 751, 128)</p>
          <a href="mailto:placement@jaipur.manipal.edu">placement@jaipur.manipal.edu</a>
        </div>
        <div class="col-md-3 ftr-logo">
          <p>Copyright &copy; 2020 MUJ PLACEMENT COORDINATOR </p>
                    <p>Developed by STUDENTS OF BCA</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </body>

</html>
