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
     <link rel="stylesheet" href="../../assets/css/echange-style.css">
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
                    <a href=""> Profil </a>
                    <a href="" class="active"> Echanges </a>
                    <a href=""> Contacts </a>
                    <a href="#"> 
                         <button id="out"> Se déconnecter </button>
                    </a>
               </nav>
          </div>
     </div>
     <div class="row content-line">
          <h3 id="content-title"> Liste de vos demandes d'échange </h3>
          <?php 
               if(empty($echange)) { ?>
               <span class="empty-panel">
                    <p id="empty-list"> Aucune demande d'échange disponible pour le moment </p>
               </span>
          <?php } else { ?>
               <div class="row header-data" style="margin-left: 25%;">
                    <div class="col-md-2 ligne">
                         <p> Objet </p>
                    </div>
                    <div class="col-md-2 ligne">
                         <p> Estimation </p>
                    </div>
                    <div class="col-md-2 ligne">
                         <p> Proposé par </p>
                    </div>
                    <div class="col-md-2 ligne">
                         <p> En échange de </p>
                    </div>
               </div>
          <?php for($i = 0; $i < count($echange); $i++) { ?>
               <div class="row line-data" style="margin-left: 25%;">
                    <div class="col-md-2 ligne">
                         <p> <?php echo $echange[$i]['nom_produit']; ?> </p>
                    </div>
                    <div class="col-md-2 ligne">
                         <p> <?php echo $echange[$i]['estimation_objet']; ?> Ar </p>
                    </div>
                    <div class="col-md-2 ligne">
                         <p> <?php echo $echange[$i]['user2']; ?> </p>
                    </div>
                    <div class="col-md-3 ligne">
                         <p> <?php echo $echange[$i]['nom_objet_concerne']; ?> </p>
                    </div>
                    <div class="col-md-1">
                         <p> 
                              <a href="">
                                   <button style="margin-top: 5px; color: white; background: dodgerblue; border: 1px solid transparent"> Accepter </button>
                              </a>
                         </p>
                    </div>
                    <div class="col-md-1">
                         <p> 
                              <a href="">
                                   <button style="margin-top: 5px; color: white; background: dodgerblue; border: 1px solid transparent"> Supprimer </button>
                              </a>
                         </p>
                    </div>
               </div>
          <?php } } ?>
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