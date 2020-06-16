<?php require_once "header.php";
include_once "javascripts.php";
$pdo = connect();

// recuperation infos BD //
if(isset($_GET['nomContinent'])) {
    $continent = $_GET['nomContinent'];
    $desPays = getCountriesByContinent($continent);
}
else {
        header("Location: index1.php");
    }
?>

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">
</head>
<!--   <main role="main" class="flex-shrink-0">-->
<!--        <div align="center">-->
<!--        --><?php //if(isset($_GET['nomContinent'])) : ?>
<!--            <h1>Countries in -->--><?php ////echo $continent ?><!-- </h1>-->
<!--        --><?php //else: ?>
<!--            <h1>All Countries</h1>-->
<!--        --><?php //endif;?>
<!--        </div>-->
<!--   </main>-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $continent ?></h1>
            <p class="lead">voici les informations sur le contient <?php echo $continent ?></p>
        </div>
    </div>

<!--<link href="css/style.css" rel="stylesheet">-->
<br> <br>
<!-- image de contients-->
    <div class="container-fluid" align="center">
        <figure class="figure">
            <?php
                if($continent == 'Europe'):
            ?>
            <img src="images/imagecontient/langfr-420px-Europe_orthographic_Caucasus_Urals_boundary_(with_borders).svg.png" class="figure-img img-fluid rounded" alt="Europe" title="Europe" >
                    <?php
                elseif($continent == "Asia"):
                    ?>
                    <img src="images/imagecontient/langfr-420px-Asia_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="Asia" title="Asia" >
                    <?php
                elseif($continent == "Africa"):
                    ?>
                    <img src="images/imagecontient/langfr-420px-Africa_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="Afrique" title="Afrique" >
                <?php
                elseif($continent == "Oceania"):
                    ?>
                    <img src="images/imagecontient/langfr-420px-Oceania_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="Oceancie" title="Oceania" >
                <?php
                elseif($continent == "North America"):
                    ?>
                    <img src="images/imagecontient/North_America_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="North Amerique" title="North Amerique" >
                <?php
                elseif($continent == "Antarctica"):
                    ?>
                    <img src="images/imagecontient/Location_Antarctica.svg.png" class="figure-img img-fluid rounded" alt="Antarctica" title="Antarctica" >
                <?php
                elseif($continent == "South America"):
                    ?>
                    <img src="images/imagecontient/langfr-420px-South_America_(orthographic_projection).svg.png" class="figure-img img-fluid rounded" alt="South America" title="South Amerique" >
                <?php
                endif;
                    ?>

            <figcaption class="figure-caption text-right"><link href="https://fr.wikipedia.org/wiki/World" alt="wikipedia" for="wikipedia">Source :wikipedia </link> </figcaption>
        </figure>
    </div>

<main role="main" class="flex-shrink-0">
    <div align="middle">
        <table id="countrytable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
        <tr>
            <th>Code</th>
            <th>Pays</th>
            <th>Region</th>
            <th>Population</th>
            <th>Annee Independance</th>
            <th>Experience de vie</th>
            <th>PIB</th>
            <th>Type de gouvernement</th>
        </tr>
        </thead>
        <tbody>
        <?php if($desPays != "") {foreach ($desPays as $value) : ?>
                    <tr>
                        <td><?php echo $value->Code; ?></td>
                        <td><?php echo $value->Name; ?> </td>
                        <td><?php echo $value->Region; ?> </td>
                        <td><?php echo $value->Population; ?> </td>
                        <td><?php echo $value->IndepYear; ?> </td>
                        <td><?php echo $value->LifeExpectancy; ?> </td>
                        <td><?php echo $value->GNP; ?> </td>
                        <td><?php echo $value->GovernmentForm; ?> </td>
                    </tr>
                <?php endforeach ;}  ?>
            </table>
        </tbody>
    </div>
</main>
    </div>
    <br> <br>

    <div class="pagination-centered">
    <div class="pagination-centered" class="list-group"  >
        <a href="#" class="list-group-item list-group-item-action active">
            <?php echo $value->Name; ?>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <?php echo $value->Region; ?>
        </a>
        <a href="#" class="list-group-item list-group-item-action disabled">
            <?php echo $value->Population; ?>
        </a>
    </div>
    </div>
<br>
    <h5>Population</h5>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>

<?php
//require_once 'javascripts.php';
require_once 'footer.php';

?>
