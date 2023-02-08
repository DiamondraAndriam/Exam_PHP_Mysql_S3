<?php
            // print_r($userobjects);
            // echo $userobjects['userobjects']['nom'];
           
                // echo $object['nom'];
                // echo $object['utilisateur'];
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "../../assets/bootstrap-3.3.6-dist/css/bootstrap.css"/>
        <link rel="stylesheet" href= "../../assets/css/liste.css"/>
        <script src="../../assets/javascript/default.js"> </script>
</head>

    <body>
            
            <div>
                    <ol>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-1">
                                    <h4>
                                        nom
                                    </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>
                                        proprietaire actuelle
                                    </h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>
                                        categorie
                                    </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>
                                        descriptions
                                    </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>
                                        Estimation
                                    </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>
                                        Photos
                                    </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>
                                        Echanger
                                    </h4>
                                </div>
                            </div>
                        </div>
                    <?php
                        $id = 1;
                        foreach ($userobjects['userobjects'] as $object) 
                        {
                        ?>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <p>
                                                <?php echo $object['nom'];?>
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p>
                                                <?php echo $object['utilisateur'];?>
                                            </p>
                                        </div>
                                        <div class="col-md-1">
                                            <p>
                                                <?php echo $object['categorie'];?>
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p>
                                                <?php echo $object['description'];?>
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p>
                                                <?php echo $object['estimation'];?>
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p>
                                                <?php echo "../../". $object['lienphoto'];?>
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p>
                                                <button type="">
                                                    <a href="<?php echo site_url('Echange/echange') . "/" . $id ?>">Echanger</a>
                                                </button>
                                            </p>
                                        </div>
                                    </div>                        
                                </div>
                        </li>
                        <?php
                            $id++;
                            }
                        ?>
                </ol>
        </div>
    </body>
</html>