<?php include("./connection.php");
// HAD CODE BACH TJIB M3TOMAT

$name = $_POST['name'];
$description = $_POST['description'];

$sql = "INSERT INTO medicaments (name, description) VALUES ('$name', '$description')";

if ($conn->query($sql) === TRUE) {
    // echo "added with success !";
    header("Location: http://localhost/dradmin/medicaments.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>