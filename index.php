<?php

  require_once "functions/functions.php";

  $listeSalaries = getAllSalaries();
  $nbSalaries = getNbSalaries();
  $moy = getSalaireMoyen();
  $max = getSalaireMax();
  $min = getSalaireMin();
  $service = getNbSalariesByService();

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = deleteUser($id);   
    header("Location: index.php");
    exit();
  }

  
//var_dump($service[0]); 
//print_r($service[0]); 
//exit();
?>

<!DOCTYPE html>
<html lang="fr">

<body>
<?php require_once("body/header.html"); ?>

    <div  class="container">
    <br>
    <button type="button" style="float: right;" class="btn btn-outline-primary">    <a style="text-decoration: none; " href="add.php" >Ajouter un utilisateur</a></button>

    <br><br></br>
      <table align=center>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>date-naissance</th>
        <th>date-embauche</th>
        <th>salaire</th>
        <th>service</th>
        <th>update</th>
        <th>delete</th>
        <?php foreach ($listeSalaries as $indice=>$ligne): ?>
        <tr>
          <td><?php echo $ligne['idsalaries']; ?></td>
          <td><?php echo $ligne['nom']; ?></td>
          <td><?php echo $ligne['prenom']; ?></td>
          <td><?php echo $ligne['date_naissance']; ?></td>
          <td><?php echo $ligne['date_embauche']; ?></td>
          <td><?php echo $ligne['salaire']; ?></td>
          <td><?php echo $ligne['service']; ?></td>
          <td><a href="update.php?id=<?= $ligne['idsalaries'] ?>">update</a></td>
          <td>
          <a href="index.php?delete=<?= $ligne['idsalaries'] ?> "   
          onClick="return confirm(' vous etes sur de vouloir supprimer <?= $ligne['nom']; ?> <?= $ligne['prenom']; ?>')">delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
          <br>
      <p>Nombre de salariés : <?= $nbSalaries[0]; ?> </p>
      <p>Salaire moyen : <?= round($moy[0] ,0); ?> </p>
      <p>Salaire maximum : <?= $min[0] ; ?> </p>
      <p>Salaire minimum : <?= $max[0] ; ?> </p>
      <p>Nombre de salariés par service :</p>
      <?php foreach($service as $indice=>$srv){ ?>
      <p><?php echo $srv['service']; ?> : <?php echo $srv['nb']; ?></p>
      <?php } ?>
    </div>
  
</body>

