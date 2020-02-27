<?php include('./database/connection.php');
$mId = $_GET['id']; // id=3

// echo $mId;
// sql to delete a record
$sql = "SELECT * FROM medicaments WHERE id=$mId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>

<?php include('./partial/header.php'); ?>
        <div class="login-form-container">
            <h1>Edit medicament</h1>
            <form action="./database/update_med.php" method="post">
            <input name="id" type="hidden" class="form-control" value="<?= $row['id'] ?>">
            <div class="form-group">
                <input name="name" type="text" class="form-control" value="<?= $row['name'] ?>">
            </div>
            <div class="form-group">
                <input name="description" type="text" class="form-control" value="<?= $row['description'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
<?php include('./partial/footer.php'); ?>
