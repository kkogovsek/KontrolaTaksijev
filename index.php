<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kontrola Taksijev</title>
	<!-- Klemen Kogovsek, Tilen Jesenko, Marko Gruden-->
	<?php include('sredstva/templates/includi.html');?>
</head>
<body>
	<?php include('sredstva/templates/navbar.php'); ?>
	<?php 
		switch ($_GET['site']) {
			case 'zapvgradnja':
				
			break;
			case 'porkontrola':

			break;
			case 'novposeg':

			break;
			default:
				include('sredstva/templates/home.html');
			break;
		}
	 ?>
</body>
</html>