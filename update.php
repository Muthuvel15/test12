<?php
    require_once "functions/functions.php";

   
    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaissance = $_POST['dateNaissance'];
        $dateEmbauche = $_POST['dateEmbauche'];
        $salaire = $_POST['salaire'];
        $service = $_POST['service'];
        
        updateUser($nom,$prenom,$dateNaissance,$dateEmbauche,$salaire,$service,$id = $_GET['id']);
      }

      $userinfo = getUserinfo($id = $_GET['id']);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<p align="center"><a href="index.php">Accueil</a></p>
    <h3>Modifier les informations de <?= $userinfo['nom']; ?> <?= $userinfo['prenom']; ?></h3>
    <div align="left">
        <form method="POST">
            <input type="hidden" name="id" value="<?= $userinfo['idsalaries']; ?>" required>
            <label>Nom :</label>
            <input type="text" name="nom" value="<?= $userinfo['nom']; ?>" required><br><br>
            <label>Prenom :</label>
            <input type="text" name="prenom" value="<?= $userinfo['prenom']; ?>" required><br><br>
            <label>Date-naissance :</label>
            <input type="date" name="dateNaissance" value="<?= $userinfo['date_naissance']; ?>" required><br><br>
            <label>Date-embauche :</label>
            <input type="date" name="dateEmbauche" value="<?= $userinfo['date_embauche']; ?>" required><br><br>
            <label>Salaire :</label>
            <input type="num" name="salaire" maxlength=4 value="<?= $userinfo['salaire']; ?>" required><br><br>
            <label>Service :</label>
            <select name="service">
                <?php if($userinfo['service'] == "commercial"){ ?>
                    <option value="commercial" selected>Commercial</option>
                    <option value="comptable">Comptable</option> 
                    <option value="informatique">Informatique</option>
                <?php }elseif($userinfo['service'] == "comptable"){ ?>
                    <option value="comptable" selected>Comptable</option>
                    <option value="commercial">Commercial</option>
                    <option value="informatique">Informatique</option>
                <?php }elseif($userinfo['service'] == "informatique"){ ?>
                    <option value="informatique" selected>Informatique</option>
                    <option value="commercial">Commercial</option>
                    <option value="comptable">Comptable</option> 
                <?php } ?>
            </select><br><br>
            <input type="submit" name= "submit" value="Valider">
        </form>
    </div>
</body>    