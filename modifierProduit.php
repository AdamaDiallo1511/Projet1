<?php
        if(isset($_POST["modifier"])){
            $id=$_POST["id"];
            $libelle=$_POST["libelle"];
            $qt=$_POST["qt"];
            $pu=$_POST["pu"];
            $sql="UPDATE produit set libelle='$libelle', prixU='$pu', quantite='$qt'
            where id=$id";
            mysqli_query($connexion,$sql);
            header("location:index.php");

        }

?>

<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">
            <input type="text" name="id" value="<?php echo $ligne[0] ?>" hidden>
        <label for="">Libelle</label>
        <input type="text" name="libelle" value="<?php echo $ligne[1] ?>" class="form-control">
        <br>
        <label for="">Prix Unitaire</label>
        <input type="number" name="pu" value="<?php echo $ligne[2] ?>"  class="form-control">
        <br>
        <label for="">Quantite</label>
        <input type="number" name="qt" value="<?php echo $ligne[3] ?>" class="form-control">
        <br>
        <button type="submit" name="modifier" class="btn btn-success">Modifier</button>
        <button type="submit" name="annuler" class="btn btn-danger">Retour</button>
    </form>
</div>