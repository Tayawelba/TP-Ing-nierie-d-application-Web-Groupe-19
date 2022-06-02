<?php

include('config/connexion.php'); #fichier Connexion au serveur local et à la base de données

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Achat d'un billet VIP</title>

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

<div class="container" style="align-content: center;">
  <main>
    <br><br>
        <h4 class="mb-3">Achat de Billet de classe VIP</h4>
        <form class="needs-validation" action="billet.php" method="POST"novalidate>
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

          <h4 class="mb-3">Mode de paiement</h4>
          <div class="bd-example">
        <nav>
          <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Carte de Crédit</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Orange Money</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">MTN Mobile Money</button>
            <button class="nav-link" id="nav-contact-tab1" data-bs-toggle="tab" data-bs-target="#nav-contact1" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Express Union Mobile Money</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row g-3">
            <div class="col-md-6">
              <label for="num-com" class="form-label">Numéro du compte</label>
             <input type="number" class="form-control" id="num-com" placeholder="Numéro du compte (16 Chiffres)" required>
              <div class="invalid-feedback">
                Numéro du compte
              </div>
            </div>

            <div class="col-md-3">
              <label for="date-valid" class="form-label">Date de validité</label>
             <input type="number" class="form-control" id="date-valid" placeholder="Date de validité (4 Chiffres)" required>
              <div class="invalid-feedback">
                Date de validité
              </div>
            </div>
            <div class="col-md-3">
              <label for="date-valid" class="form-label">Pictogramme</label>
             <input type="number" class="form-control" id="date-valid" placeholder="Les 3 derniers Chiffres du Pictogramme (3 Chiffres)" required>
              <div class="invalid-feedback">
                Les 3 derniers Chiffres du Pictogramme
              </div>
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row g-3">
            <div class="col-md-7">
              <label for="tel-paiement" class="form-label">Numéro de Téléphone Orange</label>
             <input type="number" class="form-control" id="tel-paiement" placeholder="Numéro de Téléphone de paiement (9 Chiffres)" required>
              <div class="invalid-feedback">
                Numéro de Téléphone de paiement Orange
              </div>
            </div>
            <div class="col-md-5">
              <label for="code-tel" class="form-label">Code Secret</label>
             <input type="password" class="form-control" id="code-tel" placeholder="Code secret (4 Chiffres)" required>
              <div class="invalid-feedback">
                Code Paiement Mobile
              </div>
            </div>
          </div>

          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row g-3">
            <div class="col-md-7">
              <label for="tel-paiement" class="form-label">Numéro de Téléphone MTN</label>
             <input type="number" class="form-control" id="tel-paiement" placeholder="Numéro de Téléphone de paiement (9 Chiffres)" required>
              <div class="invalid-feedback">
                Numéro de Téléphone de paiement MTN
              </div>
            </div>
            <div class="col-md-5">
              <label for="code-tel" class="form-label">Code PIN</label>
             <input type="password" class="form-control" id="code-tel" placeholder="Code secret (5 Chiffres)" required>
              <div class="invalid-feedback">
                Code Paiement Mobile
              </div>
            </div>
          </div>
          </div>

          <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">
            <div class="row g-3">
            <div class="col-md-7">
              <label for="tel-paiement" class="form-label">Numéro de Téléphone</label>
             <input type="number" class="form-control" id="tel-paiement" placeholder="Numéro de Téléphone de paiement (9 Chiffres)" required>
              <div class="invalid-feedback">
                Numéro de Téléphone de paiement
              </div>
            </div>
            <div class="col-md-5">
              <label for="code-tel" class="form-label">Code Secret</label>
             <input type="password" class="form-control" id="code-tel" placeholder="Code secret (4 Chiffres)" required>
              <div class="invalid-feedback">
                Code Paiement Mobile
              </div>
            </div>
          </div>
          </div>

        </div>
        </div>

          </div>

          <hr class="my-4">
          <input class="w-100 btn btn-primary btn-lg" type="submit" name="envoyer" value="Acheter le billet VIP">
        </form>
    </main>
</div>

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
 