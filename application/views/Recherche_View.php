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
        <form id="recherche" action="" method="get">
            <input type="text" name="mot-cle" placeholder="search">
            <select name="category">
                    <?php  
                    $a=$this->Mirenty_Model->getAll('category');
                    foreach($a as $b)
                    {
                        ?>
                    <option value="<?php echo $b['nom'] ?>"><?php echo $b['nom'] ?></option>
                    <?php
                    }
                    ?>
            </select>
            <input type="submit" value="search" >
        </form>
        <?php
        if (isset($_GET['category'])) {
            $s = $this->Mirenty_Model->recherche($_GET['mot-cle'],"nom","category","");
            print_r($s);
            $t=$this->Mirenty_Model->search($_GET['mot-cle'],$_GET['category'],"nom","category","","");
            print_r($t);
        }
        ?>
</body>
</html>