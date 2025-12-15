<?php
$conn = mysqli_connect("localhost", "root", "", "student5");

$sql = "INSERT INTO student1 (id,name, age) VALUES (1,'Arun', 22)";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>