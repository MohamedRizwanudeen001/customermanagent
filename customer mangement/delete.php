<?php
$id = $_GET['id'];

$sql = "DELETE FROM customers WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
