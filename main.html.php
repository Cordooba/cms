<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
	<style>
	.carousel-inner  {

      width: 70%;
      margin: auto;
  		
  	}
  </style>
</head>
<body>
	<div class="menu">
		<nav id="navigation_menu">
			<ul class="nav_menu">
				<li class="project"><a href="">Proyecto</a></li>
				<li class="item"><a href="<?=$base_url?>">Inicio</a></li>
				<li class="item"><a href="">Categorias</a></li>
				<li class="item"><a href="">Contacto</a></li>
			</ul>
		</nav>
	</div>
	<div class="container">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">
      <li data-target="" data-slide-to="0" class="active"></li>
      <li data-target="" data-slide-to="1"></li>
      <li data-target="" data-slide-to="2"></li>
      <li data-target="" data-slide-to="3"></li>
    </ol>
  	<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      			<img src="./assets/img/1.jpg" alt="">
      				<div class="carousel-caption">
      				</div>
   			</div>
    		<div class="item">
      			<img src="./assets/img/2.jpg" alt="">
      				<div class="carousel-caption">
      				</div>
    		</div>
    		<div class="item">
      			<img src="./assets/img/3.jpg" alt="">
      				<div class="carousel-caption">
      				</div>
    		</div>
  		</div>
  	<!-- Controls -->
  		<a class="left carousel-control" href="" role="button" data-slide="prev">
      		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      		<span class="sr-only">Previous</span>
    	</a>
   		 <a class="right carousel-control" href="" role="button" data-slide="next">
      		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      		<span class="sr-only">Next</span>
    	</a>
	</div>
	</div>
	<hr>
	<div class="container">
	<div class="main">
		<div class="col-lg-4 category1">
			<img src="./assets/img/6.png" alt="PlayStation" class="category">
			<h2>Categoria</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nobis nisi dolorum id, a esse quas amet quo sit nemo, delectus iusto? Labore et officia veniam odio aliquam. Quae, doloremque?</p>
			<p>
				<a class="btn btn-default" href="">Más...</a>
			</p>
		</div>
		<div class="col-lg-4 category2">
			<img src="./assets/img/5.ico" alt="Xbox" class="category">
			<h2>Categoria</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nobis nisi dolorum id, a esse quas amet quo sit nemo, delectus iusto? Labore et officia veniam odio aliquam. Quae, doloremque?</p>
			<p>
				<a class="btn btn-default" href="">Más...</a>
			</p>
		</div>
		<div class="col-lg-4 category3">
			<img src="./assets/img/4.png" alt="Pc" class="category">
			<h2>Categoria</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nobis nisi dolorum id, a esse quas amet quo sit nemo, delectus iusto? Labore et officia veniam odio aliquam. Quae, doloremque?</p>
			<p>
				<a class="btn btn-default" href="">Más...</a>
			</p>
		</div>
	</div>
	</div>
	<hr>
	<footer>
		<p>&copy; Alejandro Córdoba Muñoz - <a href="#">Privacy</a> - <a href="#">Terms</a></p>
	</footer>
</body>
</html>