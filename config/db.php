<?php

    $con=mysqli_connect("localhost", "root", "", "inscriptionbd");

    if(mysqli_connect_errno()){

        echo "Echec de la connexion " .mysqli_connect_errno();
    }else{
        //echo "ok";
    }

?>
