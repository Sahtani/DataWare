<?php 

try {
    
$server = "localhost";
$user = "root";
$password = "soumia";
$db = 'dataware';
$connect = new mysqli($server, $user, $password, $db);


if ($connect->connect_error) {
die("La connexion a échoué avec la base de données: " . $connect->connect_error);
}else{
echo "Connexion réussie avec la base de données.";
}
} catch (mysqli_sql_exception $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}




// Close the connection
//$connect->close();
?>