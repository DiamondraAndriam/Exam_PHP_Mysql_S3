<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="asset/style_login.css">
    <title>Login</title>
</head>
<body>
    <div id="form">
    <h1>S'inscrire</h1>
    <form action ="treatInscription" method="post">
        <div class="legend">Nom</div>
        <div class="input"><input type="text" name="nom"></div>
        <div class="legend">Prénoms</div>
        <div class="input"><input type="text" name="prenoms"></div>
        <div class="legend">E-mail</div>
        <div class="input"><input type="email" name="email"></div>
        <div class="legend">Mot de passe</div>
        <div class="input"><input type="password" name="mdp"></div>
        <div><input type="submit" value="S'inscrire"></div>
    </form>
    </div>
</body>
</html>