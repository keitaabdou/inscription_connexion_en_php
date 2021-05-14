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
                <form action="fonction/traitement_connexion.php" method="post">
                    <h2>CONNEXION</h2>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="emailmobile" placeholder="Adresse e-mail ou Mobile" required></div>
                            <!-- <div class="col"><input type="text" class="form-control" name="prenom" placeholder="Entrez votre Prénom" required></div> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="motpasse" class="form-control" placeholder="Entrez votre Mot de passe" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                            Valider
                        </button>
                    </div>
                </form>
                <div class="text-center">Vous n'avez pas de compte? <a href="inscription.php">CRÉER UN COMPTE</a></div>
            </div>
    </body>
</html>
