<!DOCTYPE html>
<?php
  include('config/connexion.php'); #fichier Connexion au serveur local et à la base de données
?>
<html>
<head>
	<meta charset="utf-8">
	<title>  Empire Express Voyage</title>

	<!-- css -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/accueil_style.css">

	<link rel="stylesheet" type="text/css" href="css/footer.css">



	<!-- fin-css -->

  
  <marquee>Empire Express Voyage vous fait voyager  en tout Sécuité, dans le plus doux des Conforts et en toute Fiabilité </marquee>
</head>
<body>
	<!-- les symboles -->


	<!-- Header de a page -->
	
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
        <img src="img/empire.png" style=" width: 180px"><br>
        <a class="navbar-brand" href="index.php">Empire Express Voyage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Achat De Billets</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown09">
                <li><a class="dropdown-item" href="achat-vip-form.php">Classe VIP</a></li>
                <li><a class="dropdown-item" href="achat-classique-form.php">Classe Classique</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Réservation De Billets</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown09">
                <li><a class="dropdown-item" href="reservation-vip-form.php">Classe VIP</a></li>
                <li><a class="dropdown-item" href="reservation-classique-form.php">Classe Classique</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tarif.php">Nos Tarifs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A Propos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Contenu de la page-->
      <article class="my-3" id="carousel" >
      

      <div >
        <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
          <div class="carousel-indicators" style="background-color: #120930;">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"> </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" >

              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Placeholder</title><rect width="100%" height="100%" fill="#124"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>ADAMAOUA - NGAOUNDERE </h5>
                <img src="img/chutes_vina.jpg" style=" width: 600px" >
                <p>Notre Agence vous souhaite Bienvenue dans l'Adamaoua,<br> Ngaoundéré là où coule le miel et lait  </p>
              </div>
              
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#128"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>NORD - GAROUA </h5>
                <img src="img/index.jpg" style=" width: 500px" >
                <p> Notre Agence vous souhaite Bienvenue dans le Nord,<br> Garoua ville lumiére </p>
              </div>
            </div>
            <div class="carousel-item">
              
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#125"/><text x="50%" y="50%" fill="#444" dy=".3em">quatrieme slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>EXTREME-NORD - MAROUA </h5>
                <img src="img/ex1.jpg" style=" width: 500px" >
                <p> Notre Agence vous souhaite Benvenue dans l'extrême-nord, <br>les hauts sommets des monts mandara </p>
              </div>
             </div>
             <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#180"/><text x="50%" y="50%" fill="#444" dy=".3em">ciquieme slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>EST - BERTOUA </h5>
                <img src="img/reserve_dja.jpg" style=" width: 460px" >
                <p>Notre Agence vous souhaite Bienvenue à L'EST, <br>Bertoua source de reserves Naturel </p>
              </div>
             </div>
             <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#894"/><text x="50%" y="50%" fill="#444" dy=".3em">sixieme slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>CENTRE - YAOUNDE </h5>
                <img src="img/yd.jpg" style=" width: 255px" >
                <p> Notre Agence vous souhaite Bienvenue dans le centre,<br> Yaoundé: coeur du pays  </p>
              </div>
             </div>
             <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#454"/><text x="50%" y="50%" fill="#444" dy=".3em">septieme slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>LITTORAL - DOUALA </h5>
                <img src="img/pad.jpg" style=" width: 550px" >
                <p> Notre Agence vous souhaite Bienvenue dans le Littoral, au coeur de l'économie du pays </p>
              </div>
             </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#304"/><text x="50%" y="50%" fill="#444" dy=".3em">huitiéme slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5> SUD - EBOLOWA  </h5>
                <img src="img/sud.jpg" style=" width: 370px" >
                <p> Notre Agence vous souhaite Bievenue dans le Sud </p>
              </div>
             </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#479"/><text x="50%" y="50%" fill="#333" dy=".3em">neuvieme slide</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5> OUEST - BAFOUSSAM </h5>
                <img src="img/baf.jpg" style=" width: 350px" >
                <p>Notre Agence vous souhaite Bienvenue à L'OUEST, <br> Bafousam foyer de la culture et des traditions </p>
              </div>
            </div>
          </div>
            </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
      </div>
    <marquee> Notre seul objectif est de Faire de votre voyage un souvenir inoubliable, Bon Voyage chez nous !!! </marquee>


  <!-- Fin contenu de la page-->




	<!-- Fin contenu de la page-->

	<!--Footer de ma page -->
  
  <div class="container" >
  <footer class="py-3 my-4">
    <hr>
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Service client</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Promotion</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Offre spéciale</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Client réguliers</a></li>
      
    </ul>
    
    <p class="text-center text-muted">&copy; 2022 Empire Express Voyage, SA.</p>
  </footer>
</div>
  <!--fin du footer de ma page -->


	<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>