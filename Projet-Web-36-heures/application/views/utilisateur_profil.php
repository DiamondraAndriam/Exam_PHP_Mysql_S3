<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../assets/css/profile-style.css">
     <link rel="stylesheet" href="../../assets/bootstrap/bootstrap-3.3.6-dist/css/bootstrap.css">
     <title> Profil Utilisateur </title>
</head>
<body>
     <div class="row header-line">
          <div class="col-md-4">
               <h3> Takalo-Takalo </h3>
          </div>
          <div class="col-md-offset-3 col-md-5">
               <nav class="menu-line">
                    <a href=""> Accueil </a>
                    <a href="" class="active"> Profil </a>
                    <a href=""> Echanges </a>
                    <a href=""> Contacts </a>
                    <a href="#"> 
                         <button id="out"> Se déconnecter </button>
                    </a>
               </nav>
          </div>
     </div>
     <div class="row mini-content" style="height: 75px">
          <p> Votre profil : </p>
     </div>
     <div class="row content-profile">
          <p style="margin-left: 25%;"> </p>
     </div>
     <div class="row mini-content" style="height: 75px">
          <p> Vos objets : </p>
     </div>
     <div class="row content-line">
          <div class="container profile-content">
               <?php if(empty($profil)) { ?>
                    <span class="empty-panel">
                         <p id="empty-list" style="color: lightslategray; font-size:17px; text-align:center; margin-top: 25px;"> Aucun objet disponible pour le moment </p>
                         <p id="empty-list">
                              <a href="">
                                   <button style="width: 200px; margin-left: 40%; margin-top: 25px; color:white; background-color: dodgerblue"> Ajouter un produit </button>
                              </a>
                         </p>
                    </span>
               <?php } else {
                    for($i = 0; $i < count($profil); $i++) { ?>
                    <div class="row line" style="margin-left: 20%;">
                         <div class="col-md-4 col">
                              <img src="<?php echo '../../'.$profil[$i]['image']; ?>" alt="Aucune image" width="165px" height="100%">
                         </div>
                         <div class="col-md-8 col">
                              <h3> <?php echo $profil[$i]['nom_objet']; ?> </h3>
                              <p> Description : <?php echo $profil[$i]['description']; ?> </p>
                              <p> Estimation : <?php echo $profil[$i]['estimation']; ?> Ar </p>
                              <p>
                                   <button type="button" data-toggle="modal" data-target="#myModal"> Supprimer </button>
                                   <button type="button" data-toggle="modal" data-target="#myModal"> Modifier </button>
                                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                   <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"> Modifier </h4>
                                        </div>
                                        <div class="modal-body">
                                             <form action="" method="post">
                                                  <p> Nom : <input style="margin-left: 50px; width: 300px" type="text" name="nom_produit" value=<?php echo $profil[$i]['nom_objet']; ?>> </p>
                                                  <p> Estimation : <input style="margin-left: 15px; width: 300px" type="text" name="estimation_produit" value=<?php echo $profil[$i]['estimation']; ?>> </p>
                                                  <p>
                                                       <textarea name="descriptions" id="" cols="60" rows="10"> <?php echo $profil[$i]['description']; ?> </textarea>
                                                  </p>
                                             </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                   </div>
                                   </div>
                                   </div>
                              </p>
                         </div>
                    </div>
               <?php } } ?>
          </div>
     </div>
     <div class="row" style="height: 75px"> </div>
     <div class="row foot-line">
          <p style="color:white; padding-left:10%; padding-top:50px"> ETU001748 - Diamondra </p>
          <p style="color:white; padding-left:10%;"> ETU001885 - Laura </p>
          <p style="color:white; padding-left:10%;"> ETU001890 - Mirenty </p>
     </div>
     <script src="../../assets/bootstrap/bootstrap-3.3.6-dist/js/jquery.min.js"> </script>
     <script src="../../assets/bootstrap/bootstrap-3.3.6-dist/js/bootstrap.min.js"> </script>
</body>
</html>