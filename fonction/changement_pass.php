<?php
    session_start();
    error_reporting(0);
    include_once('../config/db.php');

    if(isset($_POST['subpass'])){

       $o_password=$_POST['o_password'];
       $n_password=$_POST['n_password'];
       $r_password=$_POST['r_password'];

       $o_password = md5($o_password);

       $query = mysqli_query($con, "SELECT * FROM utilisateur WHERE nom='{$_SESSION['nom']}' AND motpasse='$o_password'");
       $rows = mysqli_num_rows($query);

    //si ce champ est vide
       if(empty($o_password)){


        echo "Veuillez saisir votre ancien mot de passe";

       }else if($n_password != $r_password){

            echo "Vos nouveau mot de passe sont différents";

       }else if($rows == 0){

        echo "L'ancien mot de passe est incorrect !";

        }else{

            $n_password = md5($n_password);

            $query=mysqli_query($con, "UPDATE utilisateur SET motpasse='$n_password' WHERE nom='{$_SESSION['nom']}'");

            if($query){
                echo "<script>alert('Votre mot de passe a été modifier avec succès');</script>";
                echo "<script>window.location.href ='../index.php'</script>";
            }
        }
    }

?>
