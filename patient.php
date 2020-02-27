<?php include('./partial/header.php'); 
    $row = [];
    if (isset($_GET['id'])) {
        include('./database/connection.php');
        $pId = $_GET['id'];
        $sql = 'SELECT * FROM patients WHERE id="'.$pId.'"';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        }
    }
    // print_r($row);
?>
<div class="form-container">
    <h1>Ajouter un nouveau patient</h1>
   
    <form action="./database/patient.php" method="post">
        <input name="type" type="hidden" class="form-control" value="<?= $_GET['id'] ? 'update' : 'add' ?>">
        <input name="id" type="hidden" class="form-control" value="<?= $_GET['id'] ?? '' ?>">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input name="nom" type="text" class="form-control" placeholder="Nom" value="<?= $row['nom'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <input name="prenom" type="text" class="form-control" placeholder="Prenom" value="<?= $row['prenom'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <input name="reference" type="text" class="form-control" placeholder="Reference" value="<?= $row['reference'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <input name="cin" type="text" class="form-control" placeholder="CIN" value="<?= $row['cin'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <input name="mutuelle" type="text" class="form-control" placeholder="Mutuelle" value="<?= $row['mutuelle'] ?? '' ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input name="scolarite" type="text" class="form-control" placeholder="Scolarite" value="<?= $row['scolarite'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <input name="date_naissance_age" type="text" class="form-control" placeholder="Date naissance/Age" value="<?= $row['date_naissance_age'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <input name="adresse" type="text" class="form-control" placeholder="Adresse" value="<?= $row['adresse'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <input name="tel" type="text" class="form-control" placeholder="Tel" value="<?= $row['tel'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <input name="autre_inforamtions" type="text" class="form-control" placeholder="Autre inforamtions" value="<?= $row['autre_inforamtions'] ?? '' ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input name="profession" type="text" class="form-control" placeholder="Profession" value="<?= $row['profession'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <select class="form-control" name="situation_familiale">
                        <option value=''>Situation familiale</option>
                        <option value='Célibataire' <?= isset($_GET['id']) && $row['situation_familiale'] == 'Célibataire' ? 'selected' : '' ?>>Célibataire</option>
                        <option value='Marié' <?= isset($_GET['id']) && $row['situation_familiale'] == 'Marié' ? 'selected' : '' ?>>Marié</option>
                        <option value='Divorcé' <?= isset($_GET['id']) && $row['situation_familiale'] == 'Divorcé' ? 'selected' : '' ?>>Divorcé</option>
                        <option value='Remarié' <?= isset($_GET['id']) && $row['situation_familiale'] == 'Remarié' ? 'selected' : '' ?>>Remarié</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="nombre_denfant">
                        <option value='0'>Nombre d'enfants</option>
                        <option value='1' <?= isset($_GET['id']) && $row['nombre_denfant'] == 1 ? 'selected' : '' ?>>1</option>
                        <option value='2' <?= isset($_GET['id']) && $row['nombre_denfant'] == 2 ? 'selected' : '' ?>>2</option>
                        <option value='3' <?= isset($_GET['id']) && $row['nombre_denfant'] == 3 ? 'selected' : '' ?>>3</option>
                        <option value='4' <?= isset($_GET['id']) && $row['nombre_denfant'] == 4 ? 'selected' : '' ?>>4</option>
                        <option value='5' <?= isset($_GET['id']) && $row['nombre_denfant'] == 5 ? 'selected' : '' ?>>5</option>
                        <option value='6' <?= isset($_GET['id']) && $row['nombre_denfant'] == 6 ? 'selected' : '' ?>>6</option>
                        <option value='7' <?= isset($_GET['id']) && $row['nombre_denfant'] == 7 ? 'selected' : '' ?>>7</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </form>
</div>
<?php include('./partial/footer.php'); ?>

