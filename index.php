<?php 
	session_start();
	include('skripte/konfiguracija.php');
	include('skripte/baza/baza.php');
	include('skripte/modeli/index.php');
	var_dump($_SESSION);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kontrola Taksijev</title>
	<!-- Klemen Kogovsek, Tilen Jesenko, Marko Gruden-->
	<?php include('sredstva/templates/includi.html');?>
</head>
<body>
	<?php include('sredstva/templates/navbar.php'); ?>
	<?php 
		$site = '';
		if(isset($_GET['site']))
			$site = $_GET['site'];
		switch ($site) {
			case 'zapvgradnja':
				
			break;
			case 'porkontrola':

			break;
			case 'novkontrola':
				include 'sredstva/twig/ObrazecOverovitev.twig';
			break;
			case 'novposeg':
				include 'sredstva/twig/ObrazecOveritev.twig';
			break;
			case 'novtarifa':
				include 'sredstva/twig/ObrazecTarife.twig';
			break;
			case 'login':
				if($_SERVER['REQUEST_METHOD'] == 'POST') {
					$up = new Uporabnik();
					if($up->login($_POST['ime'], $_POST['geslo']))
						header('Location: ?site=home');
					else
						header('Location: ?site=login'); 
					exit();
				}
				else {
					include('sredstva/templates/login.html');					
				}
			break;
			case 'logout':
				$_SESSION['user'] = NULL;
				header('Location: ?site=home'); 
				exit();
				break;
			default:
				include('sredstva/templates/home.html');
			break;
		}
	 ?>
</body>
</html>