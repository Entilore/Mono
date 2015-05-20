<?php  include("header_navbar.php");       ?>

    <!-- Carousel ================================================== -->
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li> <!-- Ajouter ici une ligne par image, en incrémentant le data-slide-to -->
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="definition.php#definition"><img src="assets/slider.jpg" alt="Definition OP"></a>
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">  <!-- Recopier le div, un par image -->
          <a href="exemples.php#detroit"><img src="assets/Ford-T_slider.jpg" alt="Le modèle de Détroit">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
          </a>
        </div>
        <div class="item">
          <a href="mono.php"><img src="assets/slider-mono.jpg" alt="Notre Monographie"></a>
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <a href="mono.php"><img src="assets/fablab_slider.jpg" alt="FaBLab Squared à la Cité des Sciences"></a>
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div><!-- /.carousel -->

    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">

      <!-- START THE FEATURETTES -->
      <h2 class="text-center bg-primary" >Site internet en construction</h2>

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Avant toute chose...</h2>
          <p class="lead">L’obsolescence programmée est un concept du début du siècle dernier, redevenu sujet d’actualité avec le projet de loi visant à la sanctionner. L’hypothèse est que cette pratique est l’une des causes d’une durée de vie réduite des produits. Un produit devient obsolète par différents processus. Il peut d’une part tout simplement être abîmé, cassé ou être remplacé car ses fonctionnalités sont dépassées ou que son exploitation n’est plus possible (ex : fermeture du service Minitel le 30 juin 2012 <LIEN>). Dans les deux cas le produit n’est donc plus fonctionnel.
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive img-thumbnail" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="assets/ecrans.jpg">
        </div>
      </div>

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive img-thumbnail" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="assets/ara.jpg">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Et l'innovation ?<span class="text-muted"></span></h2>
          <p class="lead">L’innovation, qu’elle soit technologique ou esthétique, peut donc être une cause d’obsolescence. Or l’obsolescence des produits déclenche le renouvellement de ses derniers. On peut alors se demander si rendre les produits un peu plus fragile peut augmenter les profits des entreprises. D’une autre part la question de l’obsolescence psychologique subsiste ; peut on qualifier d’obsolescence programmée le remplacement d’un produit qui était encore fonctionnel ? La mode est-elle un instrument des entreprises, plus qu’un moyen de se différencier, pour pousser à la consommation ?</p>
        </div>
      </div>

    <h2>Frise chronologique</h2>
    <iframe src='http://cdn.knightlab.com/libs/timeline/latest/embed/index.html?source=1EEysDek1Cjcggc8qj7dkOftniT-Tz8hOj4ipZAK5Fmc&font=Bevan-PotanoSans&maptype=toner&lang=en&height=650' width='100%' height='650' frameborder='0'></iframe> 

      <!-- /END THE FEATURETTES -->

<?php include("footer.php"); ?>
