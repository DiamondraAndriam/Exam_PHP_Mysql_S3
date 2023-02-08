<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "../../assets/bootstrap-3.3.6-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href= "../../assets/css/categorie.css "/>
    <script src="../../assets/javascript/default.js"> </script>
</head>
<body>

    <center><?php echo $form; ?><center>
    <?php
    
    if (isset($_GET['category'])) {
        $obs = $this->Mirenty_Model->getallobjectinacategory($_GET['category']);
        print_r($obs);
        echo $this->Mirenty_Model->getphotobyidobject(1);
        for($i=0;$i<count(($obs));$i++)
        {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3>proprietaire</h3>
                    <?php echo $obs[$i]['utilisateur'] ?>
                </div>
                        
                <div class="col-md-2">
                    <h3>description</h3>
                    <?php echo $obs[$i]['description'] ?>
                </div>
                            
                <div class="col-md-2">
                    <h3>estimation</h3>
                    <?php echo $obs[$i]['estimation'] ?>
                </div>
                    
                <div class="col-md-5">
                    <h3>photos</h3>
                    <img src='<?php echo "../../".$obs[$i]['lienphoto'] ?>' id="img"<?php echo $i ?>>
                </div>
                
            </div>
        </div>
    <?php
    }
    }
            // $truc = $tab;
            // print_r($truc);
            // print_r($this->Mirenty_Model->getAll('utilisateur')[0]['nom']);
    // print_r($this->Mirenty_Model->getallobjectinacategory(1));
    ?>
</body>