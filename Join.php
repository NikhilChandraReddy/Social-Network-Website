<?php
$conn=mysqli_connect("localhost","root","","social_network");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


  session_start();
  $p=$_SESSION['P'];

  $a=$_POST["Page_Name"];
  $r="SELECT * FROM page WHERE Page_Name='$a'";
  $r2=$conn->query($r);
  $row = $r2->fetch_assoc();
  $r3=$row["Page_ID"];
  $sql = "INSERT INTO members VALUES ('{$p}','{$r3}',NULL)";

  if ($conn->query($sql) === TRUE)  
    {
    echo "<script type=\"text/javascript\">
          window.location.href = \"success1.html\";
              </script>";
    } 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>