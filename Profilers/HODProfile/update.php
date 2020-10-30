<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}
   
?>
<?php
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect, "placement"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$name = $_POST['name'];
$usn = $_POST['usn'];
$email = $_POST['email'];
$sun = $_SESSION["husername"];
if($usn !=''||$email !='')
{
	if($usn == $sun)
    {
    if($query = mysqli_query($connect, "INSERT INTO hlogin ( `Name`,`Username`,`Email`) 
          VALUES ('$name', '$usn', '$email')"))
    {
				echo "<center>Details has been received successfully...!!</center>";
      }
	  
     
		else echo "FAILED";
}

else{
	  echo "<center>Enter your username only...!!</center>";
}
}
}
?>