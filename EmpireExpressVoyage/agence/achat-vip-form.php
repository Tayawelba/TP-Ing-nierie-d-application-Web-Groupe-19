<?php    
session_start(); #demarage d'une nouvelle session

if(!isset($_SESSION['connexion']) or $_SESSION['connexion']==false ) #vérification de la connexion à la session
{
  header('location:index.php'); #redirection vers le login pour une connexion 
}

$i=1;
 
?>
<?php
  include('config/connexion.php'); #fichier Connexion au serveur local et à la base de données
?>

<!doctype html>
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

  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Empire Express Voyage </a>
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
            <a class="nav-link active" aria-current="page" href="achat-vip-form.php">
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
            <a class="nav-link" href="tableau-vip.php">
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
        <h1 class="h2">Achat Billet</h1>
      </div>

      <div class="container" style="align-content: center;">
  <main>
    <br><br>
        <h4 class="mb-3">Achat de Billet de classe VIP</h4>
        <form class="needs-validation" action="billet-vip.php" method="POST"novalidate>
          <div class="row g-3">
            
          <div class="col-md-5">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" name="nomClient" class="form-control" id="nom" placeholder="Nom" required>
              <div class="invalid-feedback">
                Nom
              </div>
            </div>

            <div class="col-md-4">
              <label for="prenom" class="form-label">Prénom</label>
             <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" required>
              <div class="invalid-feedback">
                Nom
              </div>
            </div>

            <div class="col-md-3">
              <label for="cni" class="form-label">Numéro CNI ou Numéro du Pass Port</label>
              <input type="number" name="cni" class="form-control" id="cni" placeholder="Numéro CNI ou Numéro du Pass Port" required>
              <div class="invalid-feedback">
                Numéro d'identification
              </div>
            </div>

            <div class="col-md-4">
              <label for="lieu-depart" class="form-label">Lieu d'Arrivée</label>
              <select class="form-select" name="villed" id="lieu-depart" required>
                <option selected >Lieu d'Arrivée</option>

                    <?php
                        $sqlvilled = "SELECT * FROM villed"; 
                        $resultvilled=$db->query($sqlvilled);  

                        $dataVD=$resultvilled->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($dataVD as $donneVD){ 
                        $IdVilleD=$donneVD['IdVilleD'];
                        $NomVilleD=$donneVD['NomVilleD'];                                             
                    ?>
                        <option value="<?php echo $donneVD['IdVilleD']; ?>"><?php echo $IdVilleD; echo" - "; echo $donneVD['NomVilleD']; ?></option>                           
                    <?php                   
                      }
                    ?>
                </select>
              <div class="invalid-feedback">
                Lieu d'Arrivée
              </div>
            </div>
            <div class="col-md-4">
              <label for="date-depart" class="form-label">Date de Départ</label>
                <div class="input-group">
                   <div class="input-group-addon"></div>
                   <input name="dated" for="date-depart" class="form-control" type="date" placeholder="Date de Naissamce">
                  </div>
              <div class="invalid-feedback">
                Date de Départ
              </div>
            </div>


            <div class="col-md-4">
              <label for="heure-depart" class="form-label">Heure de Départ</label>
              <select class="form-select" name="heured" id="heure-depart" required>
                <option value="">Heure de Départ</option>
                <option>07H00</option>
                <option>09H00</option>
                <option>11H00</option>
              </select>
              <div class="invalid-feedback">
                Heure de Départ
              </div>
            </div>


            <div class="col-md-5">
              <label for="tel" class="form-label">Numéro de Téléphone</label>
             <input type="number" name="tel" class="form-control" id="tel" placeholder="Numéro de Téléphone" required>
              <div class="invalid-feedback">
                Numéro de Téléphone
              </div>
            </div>

            <div class="col-md-7">
              <label for="mail" class="form-label">Addresse Mail</label>
              <input type="mail" name="mail" class="form-control" id="mail" placeholder="Votre Addresse Mail" required>
            </div>
          <hr class="my-4">

          </div>


          <input class="w-100 btn btn-primary btn-lg" type="submit" name="envoyer" value="Acheter le billet VIP">
        </form>
    </main>
</div>
      
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
