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
  $b=$_POST["Comment"];
  $sql = "INSERT INTO comments VALUES ('$p','$a','$b',NULL)";
if ($conn->query($sql) === TRUE) 
    {
       echo "<br><br>You Commented On the Post successfully";
    echo "<script type=\"text/javascript\">
          window.location.href = \"Comment.html\";
              </script>";
    } 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>