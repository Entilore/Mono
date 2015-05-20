<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>L'obsolescence programmée</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Google OSWALD font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php
    if(isset($cart0)){
      ?>
      
    <!--[if IE]><script type="text/javascript" src="js/carto/excanvas.js"></script><![endif]--> <!-- js/carto/default.js -->
    <script src="js/carto/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="js/carto/sigma/sigma.min.js" type="text/javascript" language="javascript"></script>
    <script src="js/carto/sigma/sigma.parseJson.js" type="text/javascript" language="javascript"></script>
    <script src="js/carto/fancybox/jquery.fancybox.pack.js" type="text/javascript" language="javascript"></script>
    <script src="js/carto/main.js" type="text/javascript" language="javascript"></script>

    
    <link rel="stylesheet" type="text/css" href="js/carto/fancybox/jquery.fancybox.css"/>
    <link rel="stylesheet" href="css/carto.css" type="text/css" media="screen" />
    <link rel="stylesheet" media="screen and (max-height: 770px)" href="css/tablet.css" />
    <?php
      }
    ?>
  </head>

  <body style="background-image:url(assets/bg.png)">

<!-- NAVBAR ================================================== -->
    <div class="navbar-wrapper container">
        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-home"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"><strong>L'obsolescence programmée</strong></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <!-- Définitions ================================================== -->
                <li class="dropdown">
                  <a href="definition.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Définitions <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="definition.php#definition">Obsolescence programmée</a></li>
                    <li><a href="definition.php#">Démarche mercatique</a></li>
                    <li><a href="definition.php#qualite">Qualité</a></li>
                  </ul>
                </li>

                <!-- Exemples d'OP ================================================== -->
                <li class="dropdown">
                  <a href="exemples.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Exemples <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="exemples.php#imprimante">Imprimantes</a></li>
                      <li><a href="exemples.php#apple">Produits Apple</a></li>
                      <li><a href="exemples.php#ampoule">Ampoules</a></li>
                      <li><a href="exemples.php#bas-nylon">Bas Nylon</a></li>
                      <li><a href="exemples.php#detroit">Modèle de Détroit</a></li>
                  </ul>
                </li>
                <!-- Les Acteurs ================================================== -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acteurs <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">

                    <li class="dropdown-header">Ceux qui démentent </li>
                    <li><a href="acteurs.php#AlexandreDelaigue">Alexandre Delaigue</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header"> </li>
                    <li><a href="acteurs.php#">Serge Latouche</a></li>
                    <li><a href="acteurs.php#consommateur">Le consommateur</a></li>
        
                  </ul>
                </li>
                <!--  Environnement ================================================== -->
                <li class="dropdown">
                  <a href="environnement.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Environnement <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="environnement.php#epuisement">Epuisement des ressourses</a></li>
                    <li><a href="#">LCD/TRANSPORT/RECHAUFFEMENT FIXME</a></li>
                    <li><a href="environnement.php#dechets">Déchets et surproduction</a></li>
                    <li><a href="#">Economie circulaire</a></li>
                    <li><a href="#">Loi sur transition énergétique</a></li>
                  </ul>
                </li>
                <!--  Initiaties ================================================== -->
                <li class="dropdown">
                  <a href="initiatives.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Initiatives <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="initiatives.php#ara">Projet Ara, Phoneblocks</a></li>
                    <li><a href="initiatives.php#reparation">Association, sites de réparation</a></li>
                  </ul>
                </li>

                <li><a href="a-propos.php">A propos</a></li>

              </ul>
            </div>
          </div>
        </nav>

      </div>
