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
    <div id="back">
    <div id="form">
    <h1>Se connecter</h1>
    <form action ="treatLogUser" method="post">
        <div class="legend">E-mail</div>
        <div class="input"><input type="email" name="email" placeholder="E-mail"></div>
        <div class="legend">Mot de passe</div>
        <div class="input"><input type="password" name="pwd" placeholder="Mot de passe"></div>
        <div><input type="submit" value="Se connecter" id="valider-btn"></div>
    </form>
    <div id="login_link">Pas encore de compte? <a href="inscription">S'inscrire</a></div>
    <?php
        if(isset($erreur)){ ?>
            <hr/>
            <div id="erreur"> Erreur du mail ou du mot de passe </div>
        <?php } ?>
    </div>
    </div>
</body>
</html>