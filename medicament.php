<?php include('./partial/header.php'); ?>
        <div class="login-form-container">
            <form action="./database/medicament.php" method="post">
            <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Enter Name of medicament">
            </div>
            <div class="form-group">
                <input name="description" type="text" class="form-control" placeholder="Enter Description">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
<?php include('./partial/footer.php'); ?>
