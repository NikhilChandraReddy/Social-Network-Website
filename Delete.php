<?php
$conn=mysqli_connect("localhost","root","","social_network");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
  
  session_start();
  $p=$_SESSION['P'];

  $sql = "DELETE FROM comments WHERE CM_PFID='$p' OR CM_POID=(SELECT Post_ID FROM post WHERE CreatedBy_PFID='$p' OR CreatedIn_PGID=(SELECT Page_ID FROM Page WHERE Admin_PFID='$p'))";
  if ($conn->query($sql) === TRUE) 
    {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

  $sql=" DELETE FROM likes WHERE Liked_PFID='$p' OR Liked_POID=(SELECT Post_ID FROM post WHERE CreatedBy_PFID='$p' OR CreatedIn_PGID=(SELECT Page_ID FROM Page WHERE Admin_PFID='$p'))";
  if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql=" DELETE FROM Views WHERE Viewed_PFID='$p'OR Viewed_PGID=(SELECT Page_ID FROM Page WHERE Admin_PFID='$p')";
    if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql="DELETE FROM members WHERE Member_PFID='$p' OR Member_PGID=(SELECT Page_ID FROM Page WHERE Admin_PFID='$p')";
    if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }  

    $sql="DELETE FROM audio where APost_ID IN (SELECT Post_ID from post where CreatedBy_PFID='$p' OR CreatedIn_PGID=(SELECT Page_ID FROM Page WHERE Admin_PFID='$p'))";
    if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql="DELETE FROM video where VPost_ID IN (SELECT Post_ID from post where CreatedBy_PFID='$p' OR CreatedIn_PGID=(SELECT Page_ID FROM Page WHERE Admin_PFID='$p'))";
    if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql="DELETE FROM textcontent where TPost_ID IN (SELECT Post_ID from post where CreatedBy_PFID='$p' OR CreatedIn_PGID=(SELECT Page_ID FROM Page WHERE Admin_PFID='$p'))"; 
    if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


    
    $sql=" DELETE FROM photo where PPost_ID IN (SELECT Post_ID from post where CreatedBy_PFID='$p' OR CreatedIn_PGID=(SELECT Page_ID FROM Page WHERE Admin_PFID='$p'))";
    if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
          
    $sql="DELETE FROM post where CreatedBy_PFID='$p'";
    if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql="DELETE FROM page where Admin_PFID='$p'";
    if ($conn->query($sql) === TRUE) {} 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql="DELETE FROM profile WHERE Profile_ID='$p'";
    if ($conn->query($sql) === TRUE) {
      echo "<script type=\"text/javascript\">
          window.location.href = \"index.html\";
              </script>";
    } 
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>