<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/style_log.css">
    <title>Login</title>
</head>
<body>
    <div id="link">Vous avez déjà un compte ? <a href="user">Se connecter</a></div>
    <div id="back">
    <div id="form">
        <h2>S'inscrire</h2>
        <form action ="treatInscription" method="post">
            <div class="legend">Nom</div>
            <div class="input"><input type="text" name="nom" placeholder="Nom"></div>
            <div class="legend">Prénoms</div>
            <div class="input"><input type="text" name="prenoms" placeholder="Prénoms"></div>
            <div class="legend">E-mail</div>
            <div class="input"><input type="email" name="email" placeholder="Email"></div>
            <div class="legend">Mot de passe</div>
            <div class="input"><input type="password" name="mdp" placeholder="Mot de passe"></div>
            <div><input type="submit" value="S'inscrire"  id="valider-btn"></div>
        </form>
    </div>
    </div>
</body>
</html>