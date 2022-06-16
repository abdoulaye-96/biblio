<?php include "header.php";
include "connexionPdo.php";
$libelle=$_POST['libelle'];
$req=$monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
$req->bindParam(':libelle', $libelle);
$nb=$req->execute();

echo '<div class="container">';

if($nb == 1) {
    echo '<div class="alert alert-success" role="alert">
            la nationalite a bien ete ajoutee
        </div> ';
} else{
    echo '<div class="alert alert-danger" role="alert">
            la nationalite n\'a pas bien ete ajoutee
        </div> ';
}

?>
<a href="listeNationalite.php" class="btn btbn-primary">Revenir a la liste</a>
</div>

<?php include "footer.php";
?>