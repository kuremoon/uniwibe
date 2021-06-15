<?php

class genreManager{
  public static function getGenres($num){
    try
    {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=uniwibe', 'root', '', $pdo_options);
      if ($num==0) // On teste s'il s'agit de la liste complète ou d'un compte en particulier identifié par $num
      {
        $reponse = $bdd->query("SELECT code_genre, lib_genre FROM genre ;"); //Exécute la requête
      }

      else
      {
        $reponse = $bdd->prepare("SELECT code_genre, lib_genre FROM genre WHERE code_genre=?;");
        $reponse->execute(array($num));
      }

      return $reponse; // On retourne le tableau des comptes
    }
    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }

  }

}
?>
