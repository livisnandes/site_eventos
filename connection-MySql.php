<?php
$servername = "localhost:3306";
$database = "Sistema_Evento";
$user = "root";
$password = "Senai123";
// Create connection
$conexao = mysqli_connect($servername, $user, $password, $database);
// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

?>