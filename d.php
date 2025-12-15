<?php
$conn = mysqli_connect("localhost", "root", "", "student5");

$sql = "DELETE FROM student1 WHERE id = 1";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>