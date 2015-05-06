<?php
function novPoseg() {
	global $twig;
	$taksimetri = new Taksimeter();
	$taksimetri = $taksimetri->dobiTaksimetre();
	
	echo $twig->render('ObOver', array(
		'oznake' => $taksimetri
	));
}