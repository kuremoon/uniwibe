<?php
include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$message = array();
$nom = data['nom'];
$prenom = data['prenom'];
$pseudo  = data['pseudo'];
$age = data['age'];
$lib_ville = data['lib_ville'];
$genre = data['genre'];
$code_region = data['code_region'];
$code_departement = data['code_departement'];

$query = mysqli_query($con, "INSERT INTO user (nom,prenom,pseudo, age,
lib_ville,
genre,code_region,code_departement)