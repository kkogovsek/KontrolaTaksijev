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
			default:
				include('sredstva/templates/home.html');
			break;
		}
	 ?>
</body>
</html>