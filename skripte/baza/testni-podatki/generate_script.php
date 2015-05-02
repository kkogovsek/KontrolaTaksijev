<?php

	if(!isset($argv[1])){
		echo "Potrebujete konfiguracijsko datoteko!\n";
		exit(0);
	}

	echo "Branje konfiguracije ". $argv[1] . " ...\n";
	//Branje konfiguracije iz datoteke
	if(!file_exists($argv[1])){
		echo "Datoteka ne obstaja!\n";
		exit(0);
	}
	$json = file_get_contents($argv[1]);
	if(!isset($json)){
		echo "Datoteka je prazna\n";
		exit(0);
	}
	$config = json_decode($json);


	//Povezava v bazo
	echo "Povezujem ... \nStrežnik: ".$config->server." \nBaza: ".$config->database."\n";
	
	$mysqli = new mysqli($config->server,$config->username,$config->password,$config->database);

	if($mysqli->connect_errno){
		echo "Povezava z bazo je neuspešna...\n";
		exit(0);
	}

	unset($json);
	foreach ($config->tables as $tabela) {
		$attribArray = array();
		$json = array();
		echo "Obdelujem tabelo: ".$tabela->name . "\n";
		$curl = curl_init("http://www.mockaroo.com/api/generate.json?key=0d221230&count=".$tabela->count);
		//Generiranje JSON zahtevka
		foreach ($tabela->attributes as $atribut) {

			foreach ($atribut as $key => $value) {
				$attribArray[$key] = $value;
			}
			$json[] = $attribArray;
			unset($attribArray);
		}

		$json = json_encode($json);
		$json = urlencode($json);

		//Uporaba apija
		$curl = curl_init("http://www.mockaroo.com/api/generate.json?key=0d221230&count=".$tabela->count."&columns=".$json);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($curl);
		unset($curl);
		unset($json);
		//Vnos v bazo
		$cols = "";
		foreach ($tabela->attributes as $atribut) {
			$cols .= $atribut->name.",";
		}
		$cols = mb_substr($cols, 0, -1);
		$sql = sprintf("INSERT INTO %s (%s) VALUES ",$tabela->name,$cols);
		$response = json_decode($response);
		foreach ($response as $resp) {
			$temp = "";
			foreach ($resp as $val) {
				$temp .= "'".$val . "',";
			}
			$temp = mb_substr($temp, 0, -1);
			$sql .= sprintf("(%s),",$temp);
		}
		$sql = mb_substr($sql, 0, -1);

		if(!$mysqli->query($sql)){
			echo "Namaka: (" . $mysqli->errno . ") " . $mysqli->error."\n";
		}

	}