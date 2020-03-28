<?php include('./partial/header.php'); ?>
        <div class="login-form-container">
            <form action="./database/ordonnance.php" method="post">
            <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Enter Name of ordonnance">
            </div>
            <div class="form-group">
                <input name="description" type="text" class="form-control" placeholder="Enter Description">
            </div>
            
            <div class="form-group">
                    <select class="form-control" name="medicament">
                        <option value=''>medicament</option>
                           
                        <option value='1' <?= isset($_GET['id']) && $row['medicament'] == '1' ? 'selected' : '' ?>>1</option>
                        <option value='2' <?= isset($_GET['id']) && $row['medicament'] == '2' ? 'selected' : '' ?>>2</option>
                        <option value='3' <?= isset($_GET['id']) && $row['medicament'] == '3' ? 'selected' : '' ?>>3</option>
                        <option value='4' <?= isset($_GET['id']) && $row['medicament'] == '4' ? 'selected' : '' ?>>4</option>
                    </select>
                </div>
        
                <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Matin">
            </div>
            <div class="form-group">
                <input name="description" type="text" class="form-control" placeholder="soir">
            </div>            

            <div class="form-group">
                <input name="description" type="text" class="form-control" placeholder="midi">
            </div>            

            <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
<?php include('./partial/footer.php'); ?>