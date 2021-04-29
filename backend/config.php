<?php
header('Acces-Control-Allow-Origins: *');
header('Acces-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Acces-Control-Allow-Headers: token, Content-Type');
header('Acces-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: text/plain');
$con = mysql_connect("localhost", "root", "", "uniwibe") or die("Connexion à la base de données impossible");
?>