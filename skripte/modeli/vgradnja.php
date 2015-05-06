<?php
	class Rezultat {
		public function novaVgradnja('$ID_imetnik','$Oznaka','$ID_izvajalec','$Sifra_izdajatelj','$Sifra_zaporedna','$Sifra_leto','$Vrsta_posega','$Datum_posega','$Datum_izdaje','$Odgovorna_oseba','$Vozilo_tip','$Vozilo_sasija','$Vozilo_registrska','$Vozilo_konstantaW','$Pnevmatike_zadaj ','$Pnevmatike_spredaj')) {
			global $conn;

			$query = "INSERT INTO `kontrola-taksijev`.`vgradnja_ovirjanje` (`ID_imetnik`, `Oznaka`, `ID_izvajalec`, `Sifra_izdajatelj`, `Sifra_zaporedna`, `Sifra_leto`, `Vrsta_posega`, `Datum_posega`, `Datum_izdaje`, `Odgovorna_oseba`, `Vozilo_tip`, `Vozilo_sasija`, `Vozilo_registrska`, `Vozilo_konstantaW`, `Pnevmatike_zadaj`, `Pnevmatike_spredaj`) VALUES ('$ID_imetnik','$Oznaka','$ID_izvajalec','$Sifra_izdajatelj','$Sifra_zaporedna','$Sifra_leto','$Vrsta_posega','$Datum_posega','$Datum_izdaje','$Odgovorna_oseba','$Vozilo_tip','$Vozilo_sasija','$Vozilo_registrska','$Vozilo_konstantaW','$Pnevmatike_zadaj ','$Pnevmatike_spredaj');";

			$response = $conn->query($query);
			if($response === true) {
				return $conn->insert_id;			}
			else {
				die("ERROR ADDING USER, PLEASE TRY AGAIN");
			}
		}

		public function getVgradnja() {
			global $conn;
			$vgradnja = array();
			$result = $conn->query("SELECT * FROM vgradnja;");
			while( $row = fetch_row()){
			    $vgradnja[] = $row;
			}
			return $vgradnja;
		}
	}