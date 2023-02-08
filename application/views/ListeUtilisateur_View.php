            <?php
            foreach ($users as $user) 
            {
            ?>
                
                <p><?php echo $user['nom'];?></p>
                <p><?php echo $user['email'];?></p>

            <?php
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "../../assets/bootstrap-3.3.6-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href= "../../assets/css/categorie.css "/>
    <script src="../../assets/javascript/default.js"> </script>
    <link href="../../layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

    <div class="wrapper row2">
        <article class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="one_half first">
                <h6 class="heading font-x3">
                    <span>raesent non eros<span>
                </h6>
                <p>Interdum porta praesent non eros at diam faucibus pharetra.</p>
                <p class="btmspace-30">Mauris dolor diam posuere hendrerit suscipit ut convallis a erat aliquam sit amet magna in odio hendrerit eleifend phasellus vehicula auctor nisi in sollicitudin gravida tortor fusce purus nullam&hellip;</p>
                <footer><a class="btn" href="#">Read More</a></footer>
            </div>
            <div class="one_half">
                <a class="imgover" href="#"><img class="borderedbox inspace-10" src="images/demo/480x300.png" alt=""></a>
            </div>
            <!-- ################################################################################################ -->
        </article>
        <article class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="one_half first">
                <h6 class="heading font-x3">
                    <span>raesent non eros<span>
                </h6>
                <p>Interdum porta praesent non eros at diam faucibus pharetra.</p>
                <p class="btmspace-30">Mauris dolor diam posuere hendrerit suscipit ut convallis a erat aliquam sit amet magna in odio hendrerit eleifend phasellus vehicula auctor nisi in sollicitudin gravida tortor fusce purus nullam&hellip;</p>
            </div>
            <div class="one_half">
                <a class="imgover" href="#"><img class="borderedbox inspace-10" src="images/demo/480x300.png" alt=""></a>
            </div>
            <!-- ################################################################################################ -->
        </article>
    </div>
</body>
</html>