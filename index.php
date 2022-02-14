<?php
	define(CLASS_SUCCESS,"is-valid");
	define(CLASS_ERROR,"is-invalid");
	
	if(isset($_POST["btn_Go"])) {
		//Если была нажата кнопка btn_Go
		
		$pNazv = $_POST["Name"]; // Название		
		$pKol = $_POST["Quantity"]; // Количество
		$pGod = $_POST["Year"]; // Год		
		
		$isvalid=Array(
			"Name"=>CLASS_SUCCESS,
			"Quantity"=>CLASS_SUCCESS,
			"Year"=>CLASS_SUCCESS
		);
		
		// Регулярные выражения для проверки введённых значений		
		$reg_pKol = '/^[0-9]+$/';
		$reg_pGod = '/^[0-9]+$/';		
		
		// Проверка заполнения поля "Название"
		if (trim($pNazv)=="")
		{
			$isvalid["Name"]=CLASS_ERROR;
			
		}
		
		// Проверка заполненности и правильности заполнения поля "Количество"
		if (!preg_match($reg_pKol, $pKol))
		{
			$isvalid["Quantity"]=CLASS_ERROR;
		}
		
		// Проверка заполненности и правильности заполнения поля "Год"
		$d = getdate();
		if (!preg_match($reg_pGod, $pGod) || 
		!( (int)$pGod > 1900 && 
		(int)$pGod <= $d["year"]))
		{
			$isvalid["Year"]=CLASS_ERROR;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap 4 landing page</title>
	 <!-- add bootstrap css file -->

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg fixed-top ">
	  <a class="navbar-brand" href="#">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-4">
	      
	      <li class="nav-item">
	        <a class="nav-link" data-value="about" href="#">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="portfolio" href="#">Portfolio</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="blog" href="#">Blog</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="team" href="#">
	        Team</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="contact" href="#">Contact</a>
	      </li>
	    </ul>
	    
	  </div>
</nav>
<!-- header -->
<header class="header ">
  <div class="overlay"></div>
   <div class="container">
   	  <div class="description ">
  	<h1>
  		Hello ,Welcome To My official Website
  		<p>
  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  		<button class="btn btn-outline-secondary btn-lg">See more</button>
  	</h1>
  </div>
   </div>
  
</header>

<!-- about section -->
<div class="about" id="about">
	<div class="container">
	  <h1 class="text-center">About Me</h1>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/team-3.jpg" class="img-fluid">
				<span class="text-justify">S.Web Developer</span>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 desc">
			  
				<h3>D.John</h3>
				<p>
				   ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- portfolio -->
<div class="portfolio" id="portfolio">
     <h1 class="text-center">Portfolio</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/port13.png" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/port1.png" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/port6.png" class="img-fluid">
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/port3.png" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/port11.png" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/electric.png" class="img-fluid">
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/Classic.jpg" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/port1.png" class="img-fluid">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/portfolio/port8.png" class="img-fluid">
			</div>
		</div>
	</div>
</div>


<!-- Posts section -->
<div class="blog" id="blog">
	<div class="container">
	<h1 class="text-center">Blog</h1>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/posts/polit.jpg" class="img-fluid">
					</div>
					
					<div class="card-body">
					<h4 class="card-title">Post Title</h4>
						<p class="card-text">
							
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="card-footer">
						<a href="" class="card-link">Read more</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/posts/images.jpg" class="img-fluid">
					</div>
					
					<div class="card-body">
					   <h4 class="card-title">Post Title</h4>
						<p class="card-text">
							
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="card-footer">
						<a href="" class="card-link">Read more</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/posts/imag2.jpg" class="img-fluid">
					</div>
					
					<div class="card-body">
					<h4 class="card-title">Post Title</h4>
						<p class="card-text">
							
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="card-footer">
						<a href="" class="card-link">Read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Team section -->
<div class="team" id="team">
	<div class="container">
	   <h1 class="text-center">Our Team</h1>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<img src="images/team-2.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	Sara
				 </div>
				<span class="text-muted">Manager</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<img src="images/team-3.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	 Chris
				 </div>
				<span class="text-muted">S.enginner</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<img src="images/team-2.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	Layla 
				 </div>
				<span class="text-muted">Front End Developer</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<img src="images/team-3.jpg" class="img-fluid" alt="team">
				 <div class="des">
				 	J.Jirard
				 </div>
				<span class="text-muted">Team Manger</span>
			</div>
		</div>
	</div>
</div>

<!-- Contact form -->
<div class="contact-form" id="contact">
	<div class="container">
		<form action="" method="POST">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
				  <h1>Get in Touch</h1>	
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 right">
				   <div class="form-group">
				   	 <input type="text" class="form-control form-control-lg novalidation <?=$isvalid["Name"]?>" placeholder="Название" name="Name" value="<?=$_POST["Name"]?>">
					 <div class="invalid-feedback">
						<div>Поле название не заполнено</div>
					 </div>
				   </div>
				   <div class="form-group">						
						<select id="pStrana" name="pStrana" class="custom-select">
							<option value="-1">Выберите страну</option>
							<option value="1">Россия</option>
							<option value="2">США</option>
							<option value="3">Германия</option>
						</select>
				   </div>
				   <div class="form-group">
				   	 <input type="text" class="form-control form-control-lg <?=$isvalid["Quantity"]?>" placeholder="Количество" name="Quantity" value="<?=$_POST["Quantity"]?>">
					 <div class="invalid-feedback">
						<div>Поле количество не заполнено или содержит недопустимые символы</div>
					 </div>
				   </div>
				   <div class="form-group">
				   	 <input type="text" class="form-control form-control-lg <?=$isvalid["Year"]?>" placeholder="Год выпуска" name="Year" value="<?=$_POST["Year"]?>">
					 <div class="invalid-feedback">
						<div>Поле Год выпуска не заполнено или содержит недопустимые символы</div>
					 </div>
				   </div>
				   <div class="form-group">
				   	 <textarea name="Description" class="form-control form-control-lg <?=$isvalid["Description"]?>">
				   	 	<?=$_POST["Description"]?>
				   	 </textarea>
					 <div class="invalid-feedback">
						<div>Описание не заполнено или содержит недопустимые символы</div>
					 </div>
				   </div>
				   <input type="submit" class="btn btn-secondary btn-block" value="Send" name="btn_Go">
				</div>
			</div>
		</form>
	</div>
</div>
<!-- add Javasscript file from js file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

</body>
</html>