<?php
	class Rezultat {
		public function novRezultat($Tip_vozila','$Registrska_stevilka','$Stevilka_sasije','$Tip_taksimetra','$Serijska_stevilka','$Program','$Ohisje','$Segmenti','$Povezava','$Pnevmatike','$Tarife','$Realni_cas','$Napisi_oznake','$Nalepke','$KonstantaW','$Kontrolna','$Stanje_stevca','$Skladnost','$Opombe','$Uporabljeno','$Cas_castesta','$Cas_izmerjen','$Cas_pogresek','$Pot_razdalja','$Pot_Impulzi','$Pot_izmerjena') {
			global $conn;

			$query = "INSERT INTO `kontrola-taksijev`.`rezultat` (`Tip_vozila`, `Registrska_stevilka`, `Stevilka_sasije`, `Tip_taksimetra`, `Serijska_stevilka`, `Program`, `Ohisje`, `Segmenti`, `Povezava`, `Pnevmatike`, `Tarife`, `Realni_cas`, `Napisi_oznake`, `Nalepke`, `KonstantaW`, `Kontrolna`, `Stanje_stevca`, `Skladnost`, `Opombe`, `Uporabljeno`, `Cas_castesta`, `Cas_izmerjen`, `Cas_pogresek`, `Pot_razdalja`, `Pot_Impulzi`, `Pot_izmerjena`) VALUES ('$ID_rezultat','$Tip_vozila','$Registrska_stevilka','$Stevilka_sasije','$Tip_taksimetra','$Serijska_stevilka','$Program','$Ohisje','$Segmenti','$Povezava','$Pnevmatike','$Tarife','$Realni_cas','$Napisi_oznake','$Nalepke','$KonstantaW','$Kontrolna','$Stanje_stevca','$Skladnost','$Opombe','$Uporabljeno','$Cas_castesta','$Cas_izmerjen','$Cas_pogresek','$Pot_razdalja','$Pot_Impulzi','$Pot_izmerjena');";

			$response = $conn->query($query);
			if($response === true) {
				return $conn->insert_id;			}
			else {
				die("ERROR ADDING USER, PLEASE TRY AGAIN");
			}
		}

		public function getRezultat() {
			global $conn;
			$rezultat = array();
			$result = $conn->query("SELECT * FROM rezultat;");
			while( $row = fetch_row()){
			    $rezultat[] = $row;
			}
			return $rezultat;
		}
	}