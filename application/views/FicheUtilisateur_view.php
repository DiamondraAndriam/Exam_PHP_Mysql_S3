           
           
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "../../assets/bootstrap-3.3.6-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href= "../../assets/css/liste.css "/>
    <script src="../../assets/javascript/default.js"> </script>
</head>

<body>
        <div>
                <ul>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <h4>nom</h4>
                            </div>
                            <div class="col-md-3">
                                <h4>email</h4>
                            </div>
                            <div class="col-md-3">
                                <h4>date d'inscription</h4>
                            </div>
                            <div class="col-md-3">
                                <h4>voir les objet proposer</h4>
                            </div>
                        </div>
                    </div>

                        <li>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>
                                            <?php echo $users['nom'];?>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>
                                            <?php echo $users['email'];?>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><?php echo $users['dateinscription'];?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>
                                            <button type="">
                                                <a href="<?php echo site_url('Categorie_Controler/liste_objet_utilisateur') . "/" . $users['id'] ?>">voir</a>
                                            </button>
                                        </p>
                                    </div>
                                </div>                        
                            </div>
                    </li>

                </ul>
    </div>
</body>
</html>