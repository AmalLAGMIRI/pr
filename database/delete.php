<?php 
include('./connection.php');
$pId = $_GET['id'];
echo $pId;
// sql to delete a record
$sql = "DELETE FROM patients WHERE id=$pId";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/dradmin");
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>