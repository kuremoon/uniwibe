<?php
require('controller/controller.php');
try{
    if (isset($_GET['action'])) {
      if ($_GET['action'] == 'signin') {
        signin();
      }
      else if ($_GET['action'] == 'signup') {
        signup();
      }
      else if ($_GET['action'] == 'genres') {
        genres();
      }
      else if ($_GET['action'] == 'artists') {
        artists();
      }
      else if ($_GET['action'] == 'songs') {
        songs();
      }
      else if ($_GET['action'] == 'profile') {
        profile();
      }

    }
    else {
      home();
    }
}
catch(Exception $e) {
	echo 'Erreur : ' . $e->getMessage();
}


?>
