<?php include("./connection.php");
// HAD CODE BACH TJIB M3TOMAT

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$sql = "UPDATE medicaments SET name = '$name', description = '$description' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    // echo "added with success !";
    header("Location: http://localhost/dradmin/medicaments.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>