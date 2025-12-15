<?php
$conn = mysqli_connect("localhost", "root", "", "Student");

$sql = "CREATE TABLE info (
    rno VARCHAR(50),
    first_name VARCHAR(50),
    dept VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>