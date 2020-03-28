<?php include('./partial/header.php'); ?>
<?php include('./database/connection.php');

$sql = 'SELECT * FROM ordonnances';
$result = $conn->query($sql);
?>
        <div class="form-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Med</th>
                        <th>Matin</th>
                        <th>soir</th>
                        <th>Midi</th>
                        <th>action</th>
                    </tr>
                </thead>
                <?php
                if ($result->num_rows > 0) { ?>
                <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td scope="row"><?= $row['name'] ?? '' ?></td>
                        <td><?= $row['description'] ?? '' ?></td>
                        <td><?= $row['Med'] ?? '' ?></td>
                        <td><?= $row['Matin'] ?? '' ?></td>
                        <td><?= $row['soir'] ?? '' ?></td>
                        <td><?= $row['Midi'] ?? '' ?></td>
                        <td>
                            <a href="/dradmin/org_edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="/dradmin/ord_delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                           <a href="/dradmin/create_pdf.php?id=<?=$row['id'] ?>"  class="btn btn-outline-warning">pdp</button>
                   
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