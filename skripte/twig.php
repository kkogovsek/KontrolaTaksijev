<?php
	include '../vendor/twig/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();
	
	$files = array(
		fopen("../sredstva/twig/ObrazecOveritev.twig", "r"),
		fopen("../sredstva/twig/ObrazecOverovitev.twig", "r"),
		fopen("../sredstva/twig/ObrazecTarife.twig", "r"),
		);
	
	
	$loader = new Twig_Loader_Array(array(
		'ObOver' => $files[0],
		'ObOverov' => $files[1],
		'ObTar' => $files[2],
	));
	$twig = new Twig_Environment($loader);
	
	//echo $twig->render('index', $spremenljivke);