<?php   session_start(); #nouvelle session

if(isset($_SESSION['connexion']) and $_SESSION['connexion']==true )
{
  
  header('location:accueil.php'); #page d'accueil pour administrateur

}
    include('config/connexion.php');	#connexion au sereur local et la base de données
?>
<?php
 if(isset($_POST["btn"])  )
    {

	
    $q = "select count(*) as nbr from admin where nom = '".$_POST['user']."' and password = '".($_POST['password'])."'";
	$r = $db -> query($q);
	$c = $r -> fetch();

    $q1 = "select * from admin where nom = '".$_POST['user']."' and password = '".($_POST['password'])."'";
	$r1 = $db -> query($q1);
	$c1 = $r1 -> fetch();
    $id_user = $c1['id_user'] ;
    $_SESSION['id_user'] =$id_user;
    
	$nbr = $c['nbr'] ;
		if ($nbr == 1)
	{
        $_SESSION['connexion'] = true;
         
		header('location:accueil2.php'); #renvoyer vers la page d'accueil 
	}else
	{
		header('location:index.php?error=1'); #renvoyer sur la page connexion 
	}
    }
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Empire Express Voyage</title>


<link href="css/styles.css" rel="stylesheet">
<link href="LoginCss/style.css" rel="stylesheet">
        

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<br><br><br>	
		
			<div class="login-panel panel panel-default">
				<div class="box" style="height: 420px;">
						<?php
if (isset($_GET['error']))
{
		echo '<div class="alert bg-danger" role="alert" style="width: 100%;
    height: 50px;">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> le nom ou le mot de passe est incorrecte! <a  class="pull-right" aria-hidden="true"></a>
        </div>' ;

}?>

  
  <div id="header">
  <h1 id="logintoregister">Se Connecter</h1>
  </div> 
   <form enctype="multipart/form-data" method="POST">
    <div class="group">      
      <input class="inputMaterial" type="text" name="user" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Utilisateur</label>
    </div>
	    <div class="group">      
      <input class="inputMaterial" type="password" name="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Mot de passe</label>
    </div>
    <button name="btn"  id="buttonlogintoregister" type="submit">Connexion</button>
  </form>
  <div id="footer-box" ><p class="footer-text"><a href="../site/index.php"><span class="sign-up" >Accéder au site</span></a></p></div>
</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
