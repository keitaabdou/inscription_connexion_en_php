<?php
session_start();
error_reporting(0);
include_once('config/db.php');

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                    <?php
                            if(!isset($_SESSION['nom'])){
                        ?>
                        <a class="nav-link" href="connexion.php">Connexion</a>
                        <?php
                         }
                    ?>
                    </li>
                    <li class="nav-item">
                    <?php
                            if(!isset($_SESSION['nom'])){
                        ?>
                        <a class="nav-link" href="inscription.php">Inscription</a>
                        <?php
                         }
                    ?>
                    </li>

                    <li class="nav-item dropdown">
                    <?php
                            if(isset($_SESSION['nom'])){
                        ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"></i>  <?php echo $_SESSION['nom'];?></a>
                            <div class="dropdown-menu bg-dark mt-2" style="left:-80px;">
                                <a class="dropdown-item bg-dark text-white" href="deconnexion.php">Déconnexion</a>
                                <a class="dropdown-item bg-dark text-white" href="changepassword.php">Changer Mote de passe</a>
                            </div>
                            <?php
                         }
                    ?>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>


