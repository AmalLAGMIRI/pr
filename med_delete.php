<?php 
include('./database/connection.php');
$mId = $_GET['id']; // id=2
// sql to delete a record
$sql = "DELETE FROM medicaments WHERE id=$mId";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/dradmin/medicaments.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>