<?php include('./partial/header.php'); ?>
<?php include('./database/connection.php');

$sql = 'SELECT * FROM medicaments';
$result = $conn->query($sql);
?>
        <div class="form-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php
                if ($result->num_rows > 0) { ?>
                <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td scope="row"><?= $row['name'] ?? '' ?></td>
                        <td><?= $row['description'] ?? '' ?></td>
                        <td>
                            <a href="/dradmin/med_edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="/dradmin/med_delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>