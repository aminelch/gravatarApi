<?php
//si l'email n'est pas valide ou n'est pas définie dans GET[] ON arréte tout de suite 
//avec un code 404=> not found envoyé au header  
if(!isset($_GET['email']) && !filter_var($_GET['email'],FILTER_VALIDATE_EMAIL) ){
	
	http_response_code(404);
	die();
}


 