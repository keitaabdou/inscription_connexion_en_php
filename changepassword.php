<?php
    session_start();
    error_reporting(0);
    include_once('config/db.php');

?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
            <title>CONNEXION</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/style1.css">
        </head>
        <body>
            <div class="signup-form">
                <form action="fonction/changement_pass.php" method="post" onSubmit="return valid();" name="chngpwd" >
                    <h3>Modification du Mot de Passe</h3>
                    <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
                    <div class="form-group">
                        <input type="password" class="form-control" name="o_password" id="opwd" placeholder="Ancien mot de passe">
                            <!-- <div class="col"><input type="text" class="form-control" name="prenom" placeholder="Entrez votre Prénom" required></div> -->
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="n_password" id="npwd" placeholder="Nouveau mot de passe" >
                    </div>
                    <div class="form-group">
                        <input type="password" name="r_password" id="cpwd" class="form-control" placeholder="Confirmez le mot de passe">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="subpass">
                            Valider
                        </button>
                    </div>
                </form>
            </div>
    </body>
    <!-- <script src="js/script.js"></script> -->
</html>
