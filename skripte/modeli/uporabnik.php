<?php
class Uporabnik {
	public $ime;
	public $geslo;
	public $dovoljenja;

	public function imaPravico($pravica) {
		switch ($pravica) {
			case 'SERVIS':
				if(($dovoljenja & 0x01) > 0)
					return true;
				break;
			case 'KONTROLA':
				if(($dovoljenja & 0x02) > 0)
					return true;
				break;
			case 'MINISTRSTVO':
				if(($dovoljenja & 0x04) > 0)
					return true;
				break;
			case 'ADMIN':
				if(($dovoljenja & 0x08) > 0)
					return true;
				break;
			default:
				return false;
				break;
		}
	}
	public function novUporabnik($ime, $geslo, $pravice) {
		global $conn;

		$geslo = sha1($geslo);
		$query = "INSERT INTO uporabnik(ime, geslo, dovoljenja) VALUES ('$ime','$geslo',$pravice)";

		$conn->begin_transaction();
		$response = $conn->query($query);
		if($response === true) {
			$_SESSION['user'] = $ime;
		}
		else {
			die("ERROR ADDING USER, PLEASE TRY AGAIN");
		}
		$conn->commit();
	}
	public function login($ime, $geslo) {
		global $conn;

		$query = "SELECT geslo FROM uporabnik WHERE ime='$ime';";
		
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		if($row['geslo'] == sha1($geslo)) {
			$_SESSION['user'] = $ime;
			return true;
		}
		return false;
	}
}