<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">	<link rel="stylesheet"  href="./css/style.css" type="text/css" media="all">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
		<link rel = "stylesheet" href="css/style.css">
		<title>software program engineering Coral Rubilar</title>
	</head>
	<?php
 		include 'php/connection.php';
	?>
<body>
  <body>
	<!-- nav -->
	<nav class="navbar navbar-expand-lg ">
		<button class="navbar-toggler mb-2 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse navIcon"  id="navbarText" >
			<li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li> 
		</div> 
  	</nav>
	<div class="container-fluid splash" id="splash">
		<div class="container">
			<img src="images/me.jpg" alt="Coral Rubilar" title="Coral Rubilar" class="profile-image"> 
			<h1>HELLO!</h1> 
			<h1 class="intro-text"><span class="lead" id="typed">I am a </span></h1>
			<span class="continue"><a href="#about"><i class="fa fa-angle-down"></i></a></span>
		</div>
	</div>
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Me</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
				<p class="content-text text-center">	A Software Engineering student specializing in data science.<br>
										Independent and quick learner, hardworking and reliable.<br>
										Seeking for a student position.</p>
				<p class="content-text text-center">Skills: Python, C++, C, Java, HTML, CSS, JavaScript.</p>
				<button type="button" class="btn btn-primary w-25" onclick="window.open('files/Coral-Resume.pdf')">My Resume</button>
            </div>
        </div>
    </section>
	<!-- Portfolio -->
    <div class="container-fluid portfolio-container-holder content-section" id="portfolio">
		<div class="portfolio-container container">
			<h1 class="text-center">My Portfolio</h1>
     		<hr class="star-portfolio">

			<div class="row">
			<?php
				foreach ($project as $key => $row) {
					echo'<div class="col-md-6 col-xs-12 col-sm-6 portfolio-card-holder">
							<div class=" portfolio-card">
								<a href="'.$row['link'].'" target="_blank">
									<img  class="img-responsive portfolio-img" src="images/'.$row['img'].'" alt="'.$row['work_name'].'" title="'.$row['work_name'].'">
								</a>
								<div class="portfolio-img-desc">
									<p>'.$row['work_name'].'</p>
									<p>'.$row['lng_program'].'</p>
								</div>			
							</div>
						</div>';
				}?>
			
			</div>
		</div>
	</div>
<!-- Contact form -->
	<section class="justify-content-center" id="contact">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
			<!--Form with header-->
			<form action="mail.php" method="post">
				<div class="card border-primary rounded-0">
					<div class="card-header p-0">
						<div class="bg-info text-white text-center py-2">
							<h3><i class="fa fa-envelope"></i> contact</h3>
							<p class="m-0">I would glad you to contact me</p>
						</div>
					</div>
					<div class="card-body p-3">
						<div class="form-group">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fa fa-user text-info"></i></div>
								</div>
								<input type="text" class="form-control" id="nombre" name="Name" placeholder="Name" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
								</div>
								<input type="email" class="form-control" id="nombre" name="email" placeholder="Email" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
								</div>
								<textarea class="form-control" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="text-center">
							<input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
						</div>
					</div>

				</div>
			</form>
			<!--Form with header-->
        </div>
</section>
<!-- Footer -->
	<footer>
		<div class="container footer-container">
			<div class="row footer-row">
				<div class="col-xs-12 col-sm-6 col-md-6 text-center">
					<h4 class="text-center">Find me here</h4>
				 	<address>
					 	<strong><i class="fa fa-location-arrow"></i> Israel</strong><br>netanya antvert 10,<br>
						 <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department">
						 	<img src='images/shenkar.jpg'>תואר ראשון בהנדסת תוכנה בשנקר
						</a><br>
					 	<a  class="tel" href="tel:0528901396" type="tel"><i class="fa fa-mobile"></i><span> +972 528901396</span></a>
					</address>
				</div>
				<div class="col-xs-12 col-md-6 col-sm-6 social-section">
					<div class="text-center">
						<h4 class="text-center">Also, I can be found here</h4>
						<div class="text-center social-buttons">
							<a href="https://www.linkedin.com/in/coral-rubilar/" class="btn btn-default btn-lg social-button link-linkedin"><i class="fa fa-linkedin"></i></a>
							<p>coralrubilar@gmail.com</p>
						</div><hr class="footer-hr">
						<h4 class="author">Made with <i class="fa fa-heart"></i> by <strong>Coral Rubilar</strong></h4>
					</div>
				</div>
			</div><hr class="copyright">
      		<h4><i class="fa fa-copyright"></i> COPYRIGHTS 2021 ALL RIGHTS RESERVED</h4>
	</footer>

    
    <!-- Bootstrap core JavaScript -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  </body>
</html>
<!-- partial -->
  <script  src="js/script.js"></script>

</body>
</html>
