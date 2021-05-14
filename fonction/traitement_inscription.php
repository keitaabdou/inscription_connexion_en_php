<?php
include_once('../config/db.php');

if(isset($_POST['submit'])){

    $Nom=$_POST['nom'];
    $Mobile=$_POST['mobile'];
    $Email=$_POST['email'];
    $Password=md5($_POST['motpasse']);

    $ret=mysqli_query($con, "select email from utilisateur where email='$Email' || mobile='$Mobile'");
    $result=mysqli_fetch_array($ret);

    if($result>0){
        echo "<script>alert('Cet e-mail ou ce numéro de contact est déjà associé à un autre compte');</script>";
        echo "<script>window.location.href ='../inscription.php'</script>";

    }else{
        $query=mysqli_query($con, "insert into utilisateur(nom, mobile, email, motpasse) value('$Nom','$Mobile','$Email','$Password')");
        if($query){
            echo "<script>alert('Vous vous êtes inscrit avec succès');</script>";
            echo "<script>window.location.href ='../index.php'</script>";
        }
        else{
            echo "<script>alert('Quelque chose s'est mal passé. Veuillez réessayer');</script>";
            echo "<script>window.location.href ='../inscription.php'</script>";
        }
    }

}

?>
