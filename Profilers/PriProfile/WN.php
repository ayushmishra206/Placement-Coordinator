<?php
$connect = mysqli_connect("localhost", "root", "", "comm");
$subject = $_POST['Subject'];
$message = $_POST['Message'];
  
if(isset($_POST['submit']))
{
  if(mysqli_query($connect, "INSERT into prim(`Subject`,`Message`,`Images`) VALUES('$subject','$message','$images')"))
      echo "Message has been Posted";
  else
    echo "Message Posting Unsuccessfull! Try Again";
} 
   ?>
   
   