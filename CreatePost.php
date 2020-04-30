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
  $b=$_POST["Image1"];
  $c=$_POST["ImageFile1"];
  $d=$_POST["Image"];
  $e=$_POST["ImageFile"];
  $f=$_POST["Video"];
  $g=$_POST["VideoFile"];
  $h=$_POST["Audio"];
  $i=$_POST["AudioFile"];

echo $b,$c;


  $r="SELECT * FROM page WHERE Page_Name='$a'";
  $r2=$conn->query($r);
  $row = $r2->fetch_assoc();
  $r3=$row["Page_ID"];
  $sql = "INSERT INTO  post VALUES (NULL,'{$p}','{$r3}',NULL)";

  if ($conn->query($sql) === TRUE)  
    {}
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


   $z="SELECT Post_ID FROM post ORDER BY Post_ID DESC ";
   $z1=$conn->query($z);
   $z2 = $z1->fetch_assoc();
   
   $z3=$z2['Post_ID'];
   
   //for text
   if($b==1)
   {
    $sql4="INSERT INTO textcontent VALUES('$z3','$c')";
    
      if ($conn->query($sql4) === TRUE)  
      {}
      else{
        echo "Error: " . $sql4 . "<br>" . $conn->error;
      }
    }


   //for image
   if($d==1)
   {
    $sql1="INSERT INTO photo VALUES('$z3','$e')";
    
      if ($conn->query($sql1) === TRUE)  
      {}
      else{
        echo "Error: " . $sql1 . "<br>" . $conn->error;
      }
    }

    //for video
   if($f==1)
   {
    $sql2="INSERT INTO video VALUES('$z3','$g')";
    
      if ($conn->query($sql2) === TRUE)  
      {}
      else{
        echo "Error: " . $sql2 . "<br>" . $conn->error;
      }
    }

    //for Audio
   if($h==1)
   {
    $sql3="INSERT INTO Audio VALUES('$z3','$i')";
    
      if ($conn->query($sql3) === TRUE)  
      {}
      else{
        echo "Error: " . $sql3 . "<br>" . $conn->error;
      }
    }

    echo "<script type=\"text/javascript\">
        window.location.href = \"CreatePost.html\";
            </script>";

?>

