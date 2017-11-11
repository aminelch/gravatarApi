<?php 
require "src/Gravatar.php" ; 

$useremail="amine.karismatik@gmail.com";
$gravatar_src=Gravatar::getGravatar($useremail,80);
?>
<img src="<?=$gravatar_src;?>">

