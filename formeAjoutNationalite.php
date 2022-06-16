<?php include "header.php";

?>



<main role="main">
    <div class="container pt-5">
    <h2 class="mt-3 text-center">Ajouter une nationalite</h2>
    <form action="valideAjoutNationalite.php" method="post" class="col-6 offset-3 border border-primary p-3 rounded">
  <div class="form-group">
    <label for="libelle">libelle</label>
    <input type="text" class="form-control" id="libelle" name="libelle" placeholder="saisir le libelle">
  </div>
  <div class="row">
    <div class="col"> <a href="listeNationalite.php" class="btn btn-warning btn-block">Revenir a la liste</a> </div>
    <div class="col"><a href="valideAjoutNationalite.php" class="btn btn-success btn-block">Ajouter</a></div>
  </div>
</form>
    </div>
</main>

<?php include "footer.php";
?> 