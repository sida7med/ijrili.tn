<?php
$idcom = new PDO("mysql:host=127.0.0.1;dbname=igrilli","root","root");

$e = $idcom->query("SELECT * FROM demande order by etat");



$liste = $e->fetchall(PDO::FETCH_ASSOC);


$json = json_encode($liste);
?>