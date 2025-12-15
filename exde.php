<?php
$conn = mysqli_connect("localhost", "root", "", "student");

$sql = "DELETE FROM info WHERE rno = 25";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>