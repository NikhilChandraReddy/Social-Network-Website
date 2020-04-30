<?php
$conn=mysqli_connect("localhost","root","","social_network");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
  
  session_start();
  $p=$_SESSION['P'];

  $a=$_POST["PostID"];
  $b=$_POST["Like"];
  $sql = "INSERT INTO likes VALUES ('$p','$a','$b')";
if ($conn->query($sql) === TRUE) 
    {

      echo "<br><br>You Liked the Post successfully";
    echo "<script type=\"text/javascript\">
          window.location.href = \"Like.html\";
              </script>";
    } 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>