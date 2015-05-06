<?php
	class Kontrola {
		public function novaKontrola('$Oznaka','$Kontrolor','$Metoda','$Kraj_kontrole','$Datum_kontrole','$Datum_izdaje','$ID_kontrole','$ID_rezultat') {
			global $conn;

			$query = "INSERT INTO `kontrola-taksijev`.`kontrola` (`Oznaka`, `Kontrolor`, `Metoda`, `Kraj_kontrole`, `Datum_kontrole`, `Datum_izdaje`, `ID_kontrole`, `ID_rezultat`) VALUES ('$Oznaka','$Kontrolor','$Metoda','$Kraj_kontrole','$Datum_kontrole','$Datum_izdaje','$ID_kontrole','$ID_rezultat');";

			$response = $conn->query($query);
			if($response === true) {
				return $conn->insert_id;			}
			else {
				die("ERROR ADDING USER, PLEASE TRY AGAIN");
			}
		}

		public function getKontrola() {
			global $conn;
			$kontrola = array();
			$result = $conn->query("SELECT * FROM kontrola;");
			while( $row = result->fetch_row()){
			    $kontrola[] = $row;
			}
			return $kontrola;
		}
	}