<?php
require "conect_BDD.php";
require "header.php";
$tableau = ["11", "12", "13", "8", "7"];
shuffle($tableau);
if (isset($_GET["pro_id"])) {
    $id = $_GET["pro_id"];
    $request = $db->query("SELECT * FROM produits WHERE pro_id=$id");
    $row = $request->fetch();
}
?>


<div class="d-flex flex-column align-items-center  container">
    <img class="img-responsive img-fluid rounded mx-auto d-block" src="./jarditou_html_zip/jarditou_photos/<?= $tableau[1] ?>.jpg" alt="">
    <div class="text-center">
        <h1><?= $row->pro_libelle ?></h1>
        <h2>êtes vous sûr de vouloir supprimer <br> "<?= $row->pro_libelle ?> " de la base de données ? </h2>
    </div>
    <br><br>
    <div>

        <a href="script_delete.php?pro_id=<?= $row->pro_id ?>"><input class="px-3 mx-5 btn btn-danger" name="supprimer" value="Supprimer"></a>
        <a href="details.php?pro_id=<?= $row->pro_id ?>"><input class="px-3 mx-5 btn btn-success" name="supprimer" value="Anuller"></a>

    </div>
    <br><br>
</div>



<?php
require "footer.php";
?>