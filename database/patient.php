<?php include('connection.php');

$type = $_POST["type"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$reference = $_POST["reference"];
$cin = $_POST["cin"];
$mutuelle = $_POST["mutuelle"];
$scolarite = $_POST["scolarite"];
$date_naissance_age = $_POST["date_naissance_age"];
$adresse = $_POST["adresse"];
$tel = $_POST["tel"];
$autre_inforamtions = $_POST["autre_inforamtions"];
$profession = $_POST["profession"];
$nombre_denfant = $_POST["nombre_denfant"];
$situation_familiale = $_POST["situation_familiale"];

$sql = "INSERT INTO patients (nom, prenom, reference, cin, mutuelle, scolarite, date_naissance_age, adresse, tel, autre_inforamtions, profession, nombre_denfant, situation_familiale)
VALUES ('$nom', '$prenom', '$reference', '$cin', '$mutuelle', '$scolarite', '$date_naissance_age', '$adresse', '$tel','$autre_inforamtions','$profession',$nombre_denfant, '$situation_familiale')";

if( $type === 'update') {
    $id = $_POST["id"];
    $sql = "UPDATE patients SET nom = '$nom', prenom = '$prenom', reference = '$reference', cin = '$cin', mutuelle = '$mutuelle', scolarite = '$scolarite', date_naissance_age = '$date_naissance_age', adresse = '$adresse', tel = '$tel', autre_inforamtions = '$autre_inforamtions', profession = '$profession', nombre_denfant = $nombre_denfant WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/dradmin");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>