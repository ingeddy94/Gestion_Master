<?php
//On demarre la session
session_start();

//On se connecte a la base de donnee
$bdd=new PDO('mysql:host=localhost;dbname=licencegl','root','');

//Nom du fichier de laccueil
$url_home = 'login.php';
?>