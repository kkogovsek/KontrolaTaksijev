<?php
	class Rezultat {
		public function novaTarifa_odnos('$Oznaka_tarife','$ID_tarife','$Oznaka') {
			global $conn;

			$query = "INSERT INTO `kontrola-taksijev`.`tarifa_odnos` (`Oznaka_tarife`, `ID_tarife`, `Oznaka`) VALUES ('$Oznaka_tarife','$ID_tarife','$Oznaka');";

			$response = $conn->query($query);
			if($response === true) {
				return $conn->insert_id;			}
			else {
				die("ERROR ADDING USER, PLEASE TRY AGAIN");
			}
		}

		public function getTarifa_odnos() {
			global $conn;
			$tarifa_odnos = array();
			$result = $conn->query("SELECT * FROM tarifa_odnos;");
			while( $row = fetch_row()){
			    $tarifa_odnos[] = $row;
			}
			return $tarifa_odnos;
		}
	}