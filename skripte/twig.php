<?php
	include (getcwd() . '\vendor\twig\twig\lib\Twig\Autoloader.php');
	Twig_Autoloader::register();
	
	$fileNames = array(
		getcwd() . "/sredstva/twig/ObrazecOveritev.twig",
		getcwd() . "/sredstva/twig/ObrazecOverovitev.twig",
		getcwd() . "/sredstva/twig/ObrazecTarife.twig",
		getcwd() . "/sredstva/twig/PorociloKontrola.twig",
		getcwd() . "/sredstva/twig/PorociloVgradnja.twig"
	);

	$files = array(
		fopen($fileNames[0], 'r'),
		fopen($fileNames[1], 'r'),
		fopen($fileNames[2], 'r'),
		fopen($fileNames[3], 'r'),
		fopen($fileNames[4], 'r')
	);
	
	
	$loader = new Twig_Loader_Array(array(
		'ObOver' => fread($files[0],filesize($fileNames[0])),
		'ObOverov' => fread($files[1],filesize($fileNames[1])),
		'ObTar' => fread($files[2],filesize($fileNames[2])),
		'PorKon' => fread($files[3],filesize($fileNames[3])),
		'PorVg' => fread($files[4],filesize($fileNames[4])),
	));
	$twig = new Twig_Environment($loader);
	
	//echo $twig->render('index', $spremenljivke);