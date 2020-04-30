<?php
$conn=mysqli_connect("localhost","root","","social_network");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


session_start();
$p=$_SESSION['P'];

$a=$_POST["Page_name"];
$b=$_POST["Description"];
$c=$_POST["Category"];
$d=$_POST["Page_logo"];

$sql = "INSERT INTO page VALUES (NULL,'$p','{$a}','{$b}','{$c}','{$d}',NULL,1)";

if ($conn->multi_query($sql) === TRUE) 	
	{
	echo "<script type=\"text/javascript\">
        window.location.href = \"Page.php\";
            </script>";
 	} 
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
