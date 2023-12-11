<?php 
$host = "127.0.0.1";
$username = "root";
$password = "Vialog@2020";
$dbname = "ticketsystem";
// Create connection
@$con = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if(mysqli_connect_error()) {
    echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error($con) . "</p>";
    exit;
} else {
    // echo "<p>Conexão realizada com sucesso!</p>";
}
?>