<?php 
require "Gravatar.php"; 

/*
*        $email = "youremail@yourhost.com";
*        $default = "http://www.yourhost.com/default_image.jpg";	// Optional
*        $gravatar = new Gravatar($email, $default);
*        $gravatar->size = 80;
*        $gravatar->rating = "G";
*        $gravatar->border = "FF0000";
*
*        echo $gravatar; // Or echo $gravatar->toHTML();
 */


$email = "amine.karismatik@gmail.com";
$gravatar = new Gravatar($email, null);
		  
		  $gravatar->size = 80;
          $gravatar->rating = "G";
          $gravatar->border = "FF0000";
// $gravatar->toHTML();
$gravatar->toHTML();