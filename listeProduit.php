<?php
        $sql="SELECT * FROM produit";
        $result=mysqli_query($connexion,$sql);
       // var_dump(mysqli_fetch_all($result));
?>
<div class="col-md-8 offset-2 mt-5">
    <a class="btn btn-success" href="?page=ajouter">Ajouter</a>
<table class="table table striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Libelle</th>
      <th scope="col">Quantite</th>
      <th scope="col">Prix Unitaire</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while($ligne=mysqli_fetch_row($result)):?>
            <tr>
                <td><?php echo $ligne[0] ?></td>
                <td><?php echo $ligne[1] ?></td>
                <td><?php echo $ligne[2] ?></td>
                <td><?php echo $ligne[3] ?></td>
                <td>
                    <a class="btn btn-primary" href="?page=modifier&id=<?php echo $ligne[0] ?>" >Modifier</a>
                    <a class="btn btn-danger" href="?page=delete&id=<?php echo $ligne[0] ?>">Supprimer</a>
                </td>
            </tr>
    <?php endwhile ?>
  </tbody>
</table>
    
</div>