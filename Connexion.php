<?php
    $host="localhost";
    $user="root";
    $mdp="";
    $bd="PROJETBD";

    $mysqli = @new mysqli(
        $host,
        $user,
        $mdp,
        $bd
      );
        
    $connexion=mysqli_connect($host, $user, $mdp,$bd);
    if(!$connexion){
        echo "erreur de connexion a la base de donnée oh";
    }
?>