<?php    
session_start(); #demarage d'une nouvelle session

if(!isset($_SESSION['connexion']) or $_SESSION['connexion']==false ) #vérification de la connexion à la session
{
  header('location:index.php'); #redirection vers le login pour une connexion 
}

$i=1;
 
?>
<!doctype html>
<?php
  include('config/connexion.php'); #fichier Connexion au serveur local et à la base de données
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Empire Express Voyage</title>



    
<!-- css -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/accueil_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
     <link href="css/dashboard.css" rel="stylesheet">




    <!-- fin-css -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
   
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <img src="img/empire.png" style=" width: 100px">

  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Zone de Gestion </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Recherche" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="deconnect.php">Déconnecter</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
   <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="accueil2.php">
              <span data-feather="home"></span>
              Zone de Gestion : Accueil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="achat-vip-form.php">
              <span data-feather="file"></span>
              Achat Billet : VIP
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="achat-classique-form.php">
              <span data-feather="shopping-cart"></span>
              Achat Billet : CLASSIQUE
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="tableau-vip.php">
              <span data-feather="users"></span>
              Passagers : VIP
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tableau-classique.php">
              <span data-feather="bar-chart-2"></span>
              Passagers : CLASSIQUE
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Compte</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="deconnect.php">
              <span data-feather="file-text"></span>
              Déconnection
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Passagers : VIP</h3>
      </div>

  <?php

    $sqlvilled = "SELECT * FROM villed "; 
    $resultvilled=$db->query($sqlvilled);  

    $datavilled=$resultvilled->fetchAll(PDO::FETCH_ASSOC);
    foreach ($datavilled as $donnevilled){ 

      echo "<h4>Ville de Destination :"; echo $donnevilled['NomVilleD'];echo "</h4>";
         $sqlbilletpass = "SELECT * FROM achatligne, client, villed WHERE achatligne.fkIdVilleD = villed.IdVilleD AND achatligne.fkIdClient = client.IdClient AND achatligne.TypeBillet ='VIP' AND achatligne.fkIdVilleD ='".$donnevilled['IdVilleD']."' "; 
          $resultbilletpass=$db->query($sqlbilletpass);  
          $databilletpass=$resultbilletpass->fetchAll(PDO::FETCH_ASSOC);
          foreach ($databilletpass as $donnebilletpass){ 
      echo "<div class=\"table-responsive\">
        <table class=\"table table-striped table-sm\">
          <thead>
            <tr>
              <th scope=\"col\">Numero du Billet</th>
              <th scope=\"col\">Noms du Client</th>
              <th scope=\"col\">N CNI / PassePort</th>
              <th scope=\"col\">Date Depart</th>
              <th scope=\"col\">Heure Depart</th>
            </tr>
          </thead>";
         
          echo "<tbody>
            <tr>
              <td>";echo $donnebilletpass['IdAchatLig'];echo "</td>
              <td>";echo $donnebilletpass['NomClient']; echo " ";  echo $donnebilletpass['PrenomClient'];echo "</td>
              <td>";echo $donnebilletpass['NumCNI'];echo "</td>
              <td>";echo $donnebilletpass['DateDepart'];echo "</td>
              <td>";echo $donnebilletpass['HeureDepart']; echo "</td>
            </tr>
            
          </tbody>
        </table>
      </div>";
  }
    echo "<br><br>";
  
}
?>
    </main>
  </div>
</div>

<!-- footer -->
    <div class="container">
  <footer class="py-3 my-4">
    <p class="text-center text-muted">&copy; 2022 Empire Express Voyage, SA</p>
  </footer>
</div>
<!-- fin footer -->
<script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    </script><script src="js/dashboard.js"></script>
  </body>
</html>
