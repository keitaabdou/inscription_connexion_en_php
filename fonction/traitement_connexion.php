<?php
session_start();
error_reporting(0);
include_once('../config/db.php');

if(isset($_POST['submit'])){

    $Emailmobile=$_POST['emailmobile'];
    $Password=md5($_POST['motpasse']);
    $query=mysqli_query($con,"select nom from utilisateur where(email='$Emailmobile' || mobile='$Emailmobile') && motpasse='$Password'");

    $ret=mysqli_fetch_array($query);

    if($ret>0){
        $_SESSION['nom']=$ret['nom'];
        echo "<script type='text/javascript'> document.location ='../index.php'; </script>";
    }
    else{
        echo "<script>alert('Détails non valides');</script>";
        echo "<script>window.location.href ='../connexion.php'</script>";
        }
}

?>
