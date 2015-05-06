<?php
	class Oseba {
		public function novaOseba($naziv, $nas1, $nas2) {
			global $conn;

			$query = "INSERT INTO `kontrola-taksijev`.`oseba` (`Naziv`, `Naslov1`, `Naslov2`) VALUES ($naziv, $nas1, $nas2);";

			$response = $conn->query($query);
			if($response === true) {
				return $conn->insert_id;			}
			else {
				die("ERROR ADDING USER, PLEASE TRY AGAIN");
			}
		}

		public function getOsebe() {
			global $conn;
			$osebe = array();
			$result = $conn->query("SELECT * FROM oseba;");
			while( $row = mysql_fetch_assoc( $result)){
			    $osebe[] = $row;
			}
			return $osebe;
		}
	}