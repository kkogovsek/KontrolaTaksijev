<?php
//Samo include once, saj nastavi bazo

$conn = new mysqli(Konfiguracija::DATABASE_HOST.':'.Konfiguracija::DATABASE_PORT, Konfiguracija::DATABASE_USERNAME, Konfiguracija::DATABASE_PASSWORD, Konfiguracija::DATABASE_NAME);

// Check connection
if ($conn->connect_error) {
	http_response_code(500);
    die("Connection to mysql failed: " . $conn->connect_error);
}