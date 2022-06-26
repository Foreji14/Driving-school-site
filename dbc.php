<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
$hostname = "localhost";
$username = "root";
$password = "Redcamper14";
$bd = "scoala";

$conexiune = mysqli_connect($hostname, $username, $password)
    or die("Eroare! Functia apelata da eroare, este posbil ca cei 3 parametrii sa fie completati eronat!");

$baza_date = mysqli_select_db($conexiune, $bd)
    or die("Eroare! Numele aceste baze de date nu exista!");
