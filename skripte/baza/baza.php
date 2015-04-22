<?php

//Samo include once, saj nastavi bazo

$conn = new mysqli($servername, $username, $password,);

// Check connection
if ($conn->connect_error) {
	http_response_code(500);
    die("Connection to mysql failed: " . $conn->connect_error);
}