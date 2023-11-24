<?php
        if(isset($_POST["ajouter"])){
            $libelle=$_POST["libelle"];
            $qt=$_POST["qt"];
            $pu=$_POST["pu"];

            $sql="INSERT INTO produit values(NULL,'$libelle','$pu','$qt')";
            mysqli_query($connexion,$sql);
            header("location:index.php");

        }
?>  
<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">

        <label for="">Libelle</label>
        <input type="text" name="libelle" class="form-control">
        <br>
        <label for="">Prix Unitaire</label>
        <input type="number" name="pu" class="form-control">
        <br>
        <label for="">Quantite</label>
        <input type="number" name="qt" class="form-control">
        <br>
        <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
        <button type="submit" name="annuler" class="btn btn-danger">Retour</button>
    </form>
</div>