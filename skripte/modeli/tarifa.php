<?php
	class Tarifa {
		public function novaTarifa($Startnina, $Cenakm, $Zamikkm, $Cakalna, $Zamiks) {
			$query = "INSERT INTO `kontrola-taksijev`.`tarifa` (`Startnina`, `Cenakm`, `Zamikkm`, `Cakalna`, `Zamiks`) VALUES ('$Startnina','$Cenakm','$Zamikkm','$Cakalna','$Zamiks');";
		}
	}