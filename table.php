<?php
$conn = mysqli_connect("localhost", "root", "", "Student5");

$sql = "CREATE TABLE student1 (
    id INT,
    name VARCHAR(50),
    age INT
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>