<?php
	class Taksimeter {
		public function novTaksimeter($oznaka, $tip, $serijska, $program, $prilagajanje_impulzov, $izracun) {
			global $conn;

			$query = "INSERT INTO `kontrola-taksijev`.`taksimeter` (`Oznaka`, `Tip`, `Serijska`, `Program`, `Prilagajanje_impulzov`, `Izracun`) VALUES ('$oznaka', '$tip', '$serijska', '$program', '$prilagajanje_impulzov', '$izracun');";

			$conn->begin_transaction();
			$response = $conn->query($query);
			if($response != true) {
				die("ERROR ADDING TAKSIMETER, PLEASE TRY AGAIN ".$conn->error);
			}
			$conn->commit();
			return $oznaka;
		}

		public function dobiTaksimetre() {
			global $conn;
			$oznake = array();
			$result = $conn->query("SELECT Oznaka, Tip, Serijska FROM taksimeter;");

			while( $row = $result->fetch_assoc()){
			    $oznake[] = $row;
			}
			return $oznake;
		}
	}