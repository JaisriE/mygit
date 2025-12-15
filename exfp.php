<!DOCTYPE html>
<html>

<head>
    <title>BOOK STORE FORM</title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "BOOK_STORE");
        
        
       if (isset($_POST['submit'])) {

    
    $Full_name =  $_REQUEST['fn'];
    $Email = $_REQUEST['em'];
    $Phone=$_REQUEST['phno'];
    $Book_title =  $_REQUEST['bt'];
    $Author = $_REQUEST['a'];
    $Category=$_REQUEST['category'];
	$Format = isset($_REQUEST['format']) ? $_REQUEST['format'] : '';
    $Quantity = $_REQUEST['quantity'];
    $Delivery_address=$_REQUEST['add'];
	$Payment_method=$_REQUEST['pay'];
   
    $sql = "INSERT INTO book_store  VALUES ('$Full_name','$Email','$Phone','$Book_title',
	'$Author','$Category','$Format','$Quantity','$Delivery_address','$Payment_method')"; 
  

}
else{
$sql = "SELECT * FROM book_store";
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
      echo  "sucessfully read";
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