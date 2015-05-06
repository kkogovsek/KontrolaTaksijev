<?php
	class Tarifa {
		public function novaTarifa($Startnina, $Cenakm, $Zamikkm, $Cakalna, $Zamiks) {
			$query = "INSERT INTO `kontrola-taksijev`.`tarifa` (`Startnina`, `Cenakm`, `Zamikkm`, `Cakalna`, `Zamiks`) VALUES ('$Startnina','$Cenakm','$Zamikkm','$Cakalna','$Zamiks');";

	$response = $conn->query($query);
			if($response === true) {
				return $conn->insert_id;			}
			else {
				die("ERROR ADDING USER, PLEASE TRY AGAIN");
			}
		}

		public function getTarifa() {
			global $conn;
			$tarifa = array();
			$result = $conn->query("SELECT * FROM tarifa;");
			while( $row = result->fetch_row()){
			    $tarifa[] = $row;
			}
			return $tarifa;
		}
	}