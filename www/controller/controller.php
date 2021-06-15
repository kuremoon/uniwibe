<?php
require_once('model/genreManager.php');

function home()
{
	require('view/home.php');
}

function signin(){
  require('view/signin.php');
}

function signup(){
  require('view/signup.php');
}

function genres(){
  $genreManager = new genreManager();
  $genres = $genreManager->getGenres(0);
  $res = array();
	// Construction du résultat pour la DataTable
	while($row = $genres->fetch(PDO::FETCH_ASSOC))
	{
		$res[] = $row;
	}
	$results = $res;
  require('view/genres.php');
}

function artists(){
  require('view/artists.php');
}

function songs(){
  require('view/songs.php');
}

function profile(){
  require('view/profile.php');
}
?>
