<?php 
// include the lib file here, or use an autoloader if you wish
require "src/Gravatar.php" ; 
// initial the email adress
//do a gravatar request 
if(isset($_POST["email_addr"])&& !empty($_POST["email_addr"])&& filter_var($_POST["email_addr"],FILTER_VALIDATE_EMAIL)){
	
	$useremail=$_POST['email_addr'];

}else { 

$useremail="aminelch95@gmail.com";

}

	$gravatar_src=Gravatar::getGravatar($useremail,80);
function dd ($variable){
	echo '<pre>';
	var_dump($variable);
	echo '</pre>';
	return null;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Amine L'ch">

    <title>Api Gravatar </title>

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://v4-alpha.getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Gravatar</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <!-- <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a> -->
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">

      <div class="starter-template">
        <h1>Gravatar Class</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
      <div class="row">
	<div class="col-md-4">
		<form method="POST" class="form-inline">
			<div class="form-group">
				<label for="">Taper un email
				<input type="email" name="email_addr" class="form-control">	
				</label>
		<button type="submit" class="form-control btn btn-success">get</button>
		</div>
		</form>
	
	<img src="<?=$gravatar_src;?>">
	</div>
	<div class="col-md-4">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptatem deleniti aperiam impedit. Explicabo eum cumque, facilis, minima velit voluptatum quaerat officiis corporis atque consequuntur inventore repellendus dicta placeat. Ipsum!
	</div>
	</div>

	<!-- </div> -->
    </div><!-- /.container -->

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
</html>