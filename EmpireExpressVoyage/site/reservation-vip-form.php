<!DOCTYPE html>
<?php
  include('config/connexion.php'); #fichier Connexion au serveur local et à la base de données
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Réservation d'un billet VIP</title>

	<!-- css -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/accueil_style.css">

	<link rel="stylesheet" type="text/css" href="css/footer.css">



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

    <div class="container"  style="align-content: center;">
  <main>
    <br><br>
        <h4 class="mb-3">Réservation de Billet de classe VIP</h4>
        <form class="needs-validation" action="billet-reservation-vip.php" method="POST" novalidate>
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

          <input class="w-100 btn btn-primary btn-lg" type="submit" name="envoyer" value="Réserver le billet VIP">
        </form>
    </main>
</div>
<br><br> <br> <br> <br> <br> <br> <br> <br>

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


