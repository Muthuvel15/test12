<?php
  require_once "functions/functions.php";

  if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNaissance = $_POST['dateNaissance'];
    $dateEmbauche = $_POST['dateEmbauche'];
    $salaire = $_POST['salaire'];
    $service = $_POST['service']:
    
    addUser($nom,$prenom,$dateNaissance,$dateEmbauche,$salaire,$service);
    echo"Ok";
  }
?>
<!DOCTYPE html>
<?php require_once("body/header.html"); ?>


<body>
  <br>
    <h4 align=center>Ajouter un utilisateur</h4>
  </div><br>
    <div align="left">
        <form method="POST">
            <label>Nom :</label>
            <input type="text" name="nom" required><br><br>
            <label>Prenom :</label>
            <input type="text" name="prenom" required><br><br>
            <label>Date-naissance :</label>
            <input type="date" name="dateNaissance"  required><br><br>
            <label>Date-embauche :</label>
            <input type="date" name="dateEmbauche" required><br><br>
            <label>Salaire :</label>
            <input type="num" name="salaire" maxlength=4 required><br><br>
            <label>Service :</label>
            <select name="service">
                <option value="commercial" selected>Commercial</option> 
                <option value="comptable">Comptable</option>
                <option value="informatique">Informatique</option>
            </select><br><br>
            <input type="submit" name= "submit" value="Ajouter">
            <input type="reset" value="Effacer">
        </form>
    </div>
</body>    
