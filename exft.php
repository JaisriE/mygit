<?php
$conn = mysqli_connect("localhost", "root", "", "BOOK_STORE");

$sql = "CREATE TABLE book_store (
    Full_name VARCHAR(100),
	Email VARCHAR(100),
	Phone INT,
	Book_title VARCHAR(100),
	Author VARCHAR(100),
	Category VARCHAR(100),
	FORMAT VARCHAR(100),
	Quantity INT,
	Delivery_address VARCHAR(100),
	Payment_method VARCHAR(100)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>