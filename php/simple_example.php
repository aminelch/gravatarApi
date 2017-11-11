<?php 
// include the lib file here, or use an autoloader if you wish
require "src/Gravatar.php" ; 
// initial the email adress
$useremail="amine.karismatik@gmail.com";
//do a gravatar request 
$gravatar_src=Gravatar::getGravatar($useremail,80);
?>
<img src="<?=$gravatar_src;?>">

