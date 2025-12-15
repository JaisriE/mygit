<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "student");
        
        
       if (isset($_POST['insert'])) {

    
    $rno =  $_REQUEST['rno'];
    $first_name = $_REQUEST['first_name'];
    $dept=$_REQUEST['dept'];
    
   
    $sql = "INSERT INTO info  VALUES ('$rno', 
        '$first_name','$dept')"; 
  

}elseif (isset($_POST['update'])) {

	$rnou =  $_REQUEST['rnou'];
	$deptu=$_REQUEST['deptu'];

	$sql = "update info set dept='$deptu' where rno='$rnou'";

}
elseif (isset($_POST['delete'])){
 	$rnod =  $_REQUEST['rnod'];
	$sql = "delete from info where rno='$rnod'";
}
else{
$sql = "SELECT * FROM info";
$result = mysqli_query($conn, $sql);

/*if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "rollno" . $row["rno"]. " - Name: " . $row["first_name"]. " dept" . $row["dept"].   "<br>";
  }
} else {
  echo "0 results";
}

}*/
echo "<table><tr><td>rollno</td><td>Name</td><td>dept</td></tr><table>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)) {
      echo  $row["rno"]."\t". $row["first_name"]."\t".$row["dept"].   "<br>";
    }
  } else {
    echo "0 results";
  }
  
  }


if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

            //echo nl2br("\n$first_name\n $last_name\n "
                //. "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }


mysqli_close($conn);
?>
</center>
</body>

</html>