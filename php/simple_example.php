<?php 
// include the lib file here, or use an autoloader if you wish
require "src/Gravatar.php" ; 
// initial the email adress
$useremail="aminelch95@gmail.com";
//do a gravatar request 
$gravatar_src=Gravatar::getGravatar($useremail,80);

// gravatar::getGravatar
?>
<img src="<?=$gravatar_src;?>">


<table>
	<tr>
		<th><label>Email</label></th>
	</tr>
	<tr>
		<td><input type="text" name="">
	</td>

</table>
