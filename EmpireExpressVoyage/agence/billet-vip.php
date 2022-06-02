<?php

include('config/connexion.php'); #fichier Connexion au serveur local et à la base de données
      
      $nom = htmlspecialchars($_POST['nomClient']);
      $prenom = htmlspecialchars($_POST['prenom']);
      $cni = (int)$_POST['cni'];
      $tel = (int)$_POST['tel'];
      $ville = htmlspecialchars($_POST['villed']);
      $mail = htmlspecialchars($_POST['mail']); 
      $date = htmlspecialchars($_POST['dated']);
      $heure =  htmlspecialchars($_POST['heured']);

    if(isset($_POST['envoyer']))
      {
        $sql3 = "select NumCNI from client where NumCNI = '".$cni."' ";
        $recherchecni = $db -> query($sql3);
        $cniRech = $recherchecni -> fetch();
        $Rech = $cniRech['NumCNI'] ; 
        if(empty($_POST['nomClient']) and empty($_POST['prenom']) and empty($_POST['cni']) and empty($_POST['villed']) and empty($_POST['dated']) and empty($_POST['heured']) and empty($_POST['tel']) and empty($_POST['mail']))
         {
         
            echo '<div class="alert bg-danger" role="alert">
                <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Un champ est vide !<a  class="pull-right" aria-hidden="true"></a>
              </div>';  

              
        }
        
        else{

            $sqlInsert2 = 'INSERT INTO client (NomClient, PrenomClient, NumCNI, Tel, Mail) VALUES ("'.$nom.'","'.$prenom.'","'.$cni.'","'.$tel.'","'.$mail.'")';

            $db->exec($sqlInsert2);

            $sql7 = "select IdClient from client where NumCNI = '".$cni."' ";
              $rechercheIdCl = $db -> query($sql7);
              $IdClRech = $rechercheIdCl -> fetch();
              $Rech7 = $IdClRech['IdClient'] ;

            
            $sqlInsert = 'INSERT INTO achatligne (DateDepart, HeureDepart, TypeBillet, fkIdClient, fkIdVilleD) VALUES ("'.$date.'","'.$heure.'","VIP","'.$Rech7.'","'.$ville.'")'; 
           
           $db->exec($sqlInsert);
          
           $sqlIdAchat = 'SELECT IdAchatLig FROM achatligne, client, villed WHERE achatligne.fkIdVilleD = villed.IdVilleD AND achatligne.fkIdClient = client.IdClient AND achatligne.DateDepart ="'.$date.'" AND achatligne.HeureDepart ="'.$heure.'" AND client.NumCNI ="'.$cni.'" AND client.Mail ="'.$mail.'" AND villed.IdVilleD = "'.$ville.'" ';
           
            $resultatId=$db->query($sqlIdAchat);  

              $databillet=$resultatId->fetchAll(PDO::FETCH_ASSOC);
              foreach ($databillet as $donnebillet){

              $IdAchatLig = $donnebillet['IdAchatLig'];      
           }
           

             $sqlbillet = "SELECT * FROM achatligne, client, villed WHERE achatligne.fkIdVilleD = villed.IdVilleD AND achatligne.fkIdClient = client.IdClient AND achatligne.IdAchatLig ='".$IdAchatLig."' "; 

              $resultbillet=$db->query($sqlbillet);  

              $databillet=$resultbillet->fetchAll(PDO::FETCH_ASSOC);
              foreach ($databillet as $donnebillet){ 

           
   

                                             
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Empire Express Voyage : Billet</title>

	<!-- css -->

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">



	<!-- fin-css -->
</head>
<body>

  <!-- header -->
<?php  
echo "<button type=\"button\" class=\"btn btn-outline-secondary\"><a href=\"achat-vip-form.php\">Retour</a></button>";
?>
<!-- fin header -->
<br><br><br>
	<!-- Contenu de la page-->
<div class="container">



        <table class="table">
          <thead>
            <tr>
              <th colspan="4"><h3 align="center">EMPIRE EXPRESS VOYAGE : BILLET D'ACCESS A BORD</h3></th>
            </tr>
          </thead>
          <thead>
            <tr>
              <td colspan="2">Nons</td>
              <td>Type Billet</td>
              <td>Numero Billet</td>
              <td>CNI / Passeport</td>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="2" class="billet"><?php echo $donnebillet['NomClient']; echo ' '; echo $donnebillet['PrenomClient']; ?></td>
              <td><?php echo $donnebillet['TypeBillet']; ?></td>
              <td><?php echo $donnebillet['IdAchatLig']; ?></td>
              <td><?php echo $donnebillet['NumCNI']; ?></td>
            </tr>
          </tbody>
          <thead>
            <tr>
              <td colspan="2">Itineraire</td>
              <td>Prix Billet</td>
              <td>Prix Bagages</td>
              <td>Vehicule</td>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="2">Ngaoundere - <?php echo $donnebillet['NomVilleD']; ?> </td>
              <td><?php echo $donnebillet['PrixVIP']; ?> F CFA </td>
              <td>0 F CFA</td>
              <td>AD 093 AF</td>
            </tr>
          </tbody>
          <thead>
            <tr>
              <td colspan="2">Date Depart</td>
              <td colspan="1">Heure Depart</td>
              <td colspan="2">Date Achat</td>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <td colspan="2"><?php echo $donnebillet['DateDepart']; ?></td>
              <td colspan="1"><?php echo $donnebillet['HeureDepart']; ?></td>
             <td colspan="2"><?php echo $donnebillet['DateAchat']; ?></td>
            </tr>
          </tfoot>
          
        </table>
        <input class="w-100 btn btn-primary btn-lg" type="" name="" value="Télécharger votre Billet">

</div>

<?php                 
}
}
}

?>
  

</body>
</html>
