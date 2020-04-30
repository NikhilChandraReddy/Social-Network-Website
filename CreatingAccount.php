<?php
$conn=mysqli_connect("localhost","root","","social_network");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$a=$_POST["F_name"];
$b=$_POST["L_name"];
$c=$_POST["DOB"];
$d=$_POST["Sex"];
$e=$_POST["Phone_no"];
$f=$_POST["Email"];
$g=$_POST["Username"];
$h=$_POST["Password"];
$i=$_POST["Profile_Pic"];
$sql = "INSERT INTO profile VALUES (NULL,'{$a}','{$b}','{$c}','{$d}','{$e}','{$f}','{$g}','{$h}','{$i}',NULL,2)";

if ($conn->query($sql) === TRUE) 	
	{
	echo "<script type=\"text/javascript\">
        window.location.href = \"success.html\";
            </script>";
 	} 
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
