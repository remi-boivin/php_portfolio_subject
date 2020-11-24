<?php $servername = 'localhost';
$username = 'root';
$password = 'root';
try{
  session_start();
  //On établit la connexion
  $conn = new PDO("mysql:host=$servername;dbname=PHP_PORTFOLIO_PROJECT", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Connexion réussie';
  $reponse = $conn->query('SELECT * from USER');
  $donnees = $reponse->fetch();
  $_SESSION["LAST_NAME"]=$donnees['LAST_NAME'];
  $_SESSION["FIRST_NAME"]=$donnees['FIRST_NAME'];
  $_SESSION["WORK"]=$donnees['WORK'];
  $_SESSION["DESCRIPTION"]=$donnees['DESCRIPTION'];
}
/*On capture les exceptions si une exception est lancée et on affiche
*les informations relatives à celle-ci*/
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}
?>
