<?php include("./connection.php");
// HAD CODE BACH TJIB M3TOMAT

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$med = $_POST['med'];
$matin = $_POST['matin'];
$soir = $_POST['soir'];
$midi = $_POST['midi'];

$sql= "UPDATE ordonnances SEt name='$name',description ='$description', med='$med',matin=$matin,soir=$soir,midi=$midi  where id=$id";



if ($conn->query($sql) === TRUE) {
    // echo "added with success !";
    header("Location: http://localhost/dradmin/ordonnances.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>