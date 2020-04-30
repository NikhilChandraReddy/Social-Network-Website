<?php
$conn=mysqli_connect("localhost","root","","social_network");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$username=$_POST["Username"];
$password=$_POST["Password"];
$sql = "SELECT * FROM profile WHERE Username = '$username' AND Password='$password' ";
$results = $conn->query($sql);
if ($results->num_rows==0) 
{
    echo"Wrong Credentials";
    echo "
            <script type=\"text/javascript\">
        window.location.href = \"login.html\";
            </script>
        ";
}

$row=$results->fetch_assoc();



session_start();
$_SESSION['P']=$row["Profile_ID"];


if($row['PF_Active']==1)  //Redirect to Business Page
{
    echo "if one";
echo "
            <script type=\"text/javascript\">
        window.location.href = \"Profile.php\";
            </script>
        ";
}//inner if close


else if($row["PF_Active"]==0)  // Redirect to Client Page
{
    echo "if zero";
	$z=$row["Profile_ID"];
	$s="UPDATE profile SET PF_Active=1 WHERE Profile_ID='$z'";
    $sql2 = "UPDATE page SET PG_Active=2 WHERE Admin_PFID='$p' ";
    if($conn->query($sql2)=== TRUE){}
        
    if($conn->query($s)=== TRUE){
		echo "<script type=\"text/javascript\">
    	   window.location.href = \"Profile.php\";
        	    </script>
        ";
    }    
    else{
		echo "Error: " . $s . "<br>" . $conn->error;
	}


    
}//inner else close 




$conn->close();



 ?>