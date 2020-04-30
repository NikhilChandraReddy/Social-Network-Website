<?php
$conn=mysqli_connect("localhost","root","","social_network");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


session_start();
$p=$_SESSION['P'];

$sql = "UPDATE profile SET PF_Active=2 WHERE Profile_ID='$p' ";
$sql2 = "UPDATE page SET PG_Active=2 WHERE Admin_PFID='$p' ";
if ($conn->query($sql2) === false)   
  {
  echo "Logged out Successfully";
  }

if ($conn->query($sql) === false)   
  {
  echo "Logged out Successfully";
  }

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="pet.css">

</head>
<body id="wrapper">

<header >
    <meta charset="UTF-8">
    <title>Login Page</title>
    <h1>SOCIAL NETWORK</h1>
</header>

<div class="row">
  <div class="column left" >

<nav>
<a href='index.html' > Home </a> <br>
<a href='aboutUs.html' > About Project </a> <br>
<a href='login.html' > Login </a>
</nav>

  </div>
  <div class="column right" >
   <img src="xxx.jpg" height="300px" width="100%">


    <h2><font size="5">Logged out Successfully</font></h2><br>


  <br><br><br>
    <footer>
    <i>Copyright&copy;Team 10<br><a href="mailto:nikhilchandrare.mulagondla@mavs.uta.edu">nikhilchandrare.mulagondla@mavs.uta.edu</a><br>
      <a href="mailto:chiranjeevidhee.bommareddy@mavs.uta.edu">chiranjeevidhee.bommareddy@mavs.uta.edu</a>
  

</footer>