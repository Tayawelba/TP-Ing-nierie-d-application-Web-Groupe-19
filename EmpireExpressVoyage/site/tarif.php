<!DOCTYPE html>
<?php
  include('config/connexion.php'); #fichier Connexion au serveur local et à la base de données
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Empire Express Voyage</title>

	<!-- css -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/accueil_style.css">

	<link rel="stylesheet" type="text/css" href="css/footer.css">
  <style type="text/css">
    th{background-color: yellowgreen; size: 10px;}
    table{size:350px;}
    #ndere{background-color: orange;}
    #ndéré{background-color: orange;}
    td{background-color: coral;}
    body{background-color: lemonchiffon;}
  </style>


	<!-- fin-css -->
</head>
<body>
	<!-- les symboles -->


	<!-- Header de a page -->
	
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
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

	<!-- Fin du header -->

	<!-- Contenu de la page-->

<h1 align="center"><strong><i><u><b>NOS TARIFS</b></u></i></strong></h1>
  <br><br><br><br>
  <table align="center" border="1" col="5" row="15px">
    <tr>
      <th>TRAJET</th>
        <th>TARIFS CLASSIQUE</th>
        <th>TARIFS VIP</th>
    </tr>
    <tr>
      <td id="ndere">Ngaoundéré-Garoua</td>
      <td>4000f</td>
      <td id="ndéré">6000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-SoraweL</td>
      <td>6000f</td>
      <td id="ndéré">8000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Figuil</td>
      <td>6000f</td>
      <td id="ndéré">8000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Bidzar</td>
      <td>6000f</td>
      <td id="ndéré">8000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Magada</td>
      <td>6000f</td>
      <td id="ndéré">8000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Moutourwa</td>
      <td>8000f</td>
      <td id="ndéré">10000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Maroua</td>
      <td>8000f</td>
      <td id="ndéré">10000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Douala</td>
      <td>17000f</td>
      <td id="ndéré">19000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Edéa</td>
      <td>16000f</td>
      <td id="ndéré">18000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Yaoundé</td>
      <td>13000f</td>
      <td id="ndéré">15000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Abon-Bang</td>
      <td>9000f</td>
      <td id="ndéré">11000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Doumé</td>
      <td>8000f</td>
      <td id="ndéré">10000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Bertoua</td>
      <td>7000f</td>
      <td id="ndéré">9000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Ndokayo</td>
      <td>5000f</td>
      <td id="ndéré">7000f</td>
    </tr>
    <tr>
      <td id="ndere">Ngoundéré-Garoua Boulai</td>
      <td>3000f</td>
      <td id="ndéré">5000f</td>
    </tr><tr>
      <td id="ndere">Ngoundéré-Maiganga</td>
      <td>1000f</td>
      <td id="ndéré">3000f</td>
    </tr>
    <tr>
  </table>




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