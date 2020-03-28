<?php include("./connection.php");
// HAD CODE BACH TJIB M3TOMAT

$name = $_POST['name'];
$description = $_POST['description'];
$med = $_POST['med'];
$matin = $_POST['matin'];
$soir = $_POST['soir'];
$midi = $_POST['midi'];

$sql = "INSERT INTO ordonnances (name, description, med,matin,soir,midi) 
VALUES ('$name', '$description','$med','$matin','$soir','$midi')";


if ($conn->query($sql) === TRUE) {
    // echo "added with success !";
    header("Location: http://localhost/dradmin/ordonnances.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

