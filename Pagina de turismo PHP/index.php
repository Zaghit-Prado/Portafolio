<?php
require("Global/conexion.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<!-- META DATA -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!--font-family-->
	<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

	<!-- TITLE OF SITE -->
	<title>City-Tours</title>

	<!-- favicon img -->
	<link rel="shortcut icon" type="image/icon" href="favicon.png" />

	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<!--animate.css-->
	<link rel="stylesheet" href="assets/css/animate.css" />

	<!--hover.css-->
	<link rel="stylesheet" href="assets/css/hover-min.css">

	<!--datepicker.css-->
	<link rel="stylesheet" href="assets/css/datepicker.css">

	<!--owl.carousel.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="assets/css/foter.css">
	<!-- range css-->
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

	<!-- bootsnav -->
	<link rel="stylesheet" href="assets/css/bootsnav.css" />

	<!--style.css-->
	<link rel="stylesheet" href="assets/css/styles.css" />

	<!--responsive.css-->
	<link rel="stylesheet" href="assets/css/responsive.css" />

	<link rel="stylesheet" href="pre.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
	<div class="loader">
		<img loading="lazy" src="img/peru.gif" width="200" height="200">
	</div>

	<header class="top-area">
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="#">
								City<span>Tours</span>
							</a>
						</div><!-- /.logo-->
					</div><!-- /.col-->
					<div class="col-sm-10">
						<div class="main-menu">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<i class="fa fa-bars"></i>
								</button><!-- / button-->
							</div><!-- /.navbar-header-->
							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="smooth-menu"><a href="#home">Inicio</a></li>
									<li class="smooth-menu"><a href="#gallery">Mejores destinos</a></li>
									<li class="smooth-menu"><a href="#event">Evento</a></li>


									<!--/.project-btn-->
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.main-menu-->
					</div><!-- /.col-->
				</div><!-- /.row -->
				<div class="home-border"></div><!-- /.home-border-->
			</div><!-- /.container-->
		</div><!-- /.header-area -->

	</header><!-- /.top-area-->
	<!-- main-menu End -->


	<!--about-us start -->
	<section id="home" class="about-us">
		<div class="container">
			<div class="about-us-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="single-about-us">
							<div class="about-us-txt">
								<h2>
									¡Bienbenido a Perú y a sus mejores lugares turisticos!

								</h2>
								
								<!--/.about-btn-->
							</div>
							<!--/.about-us-txt-->
						</div>
						<!--/.single-about-us-->
					</div>
					<!--/.col-->
					<div class="col-sm-0">
						<div class="single-about-us">

						</div>
						<!--/.single-about-us-->
					</div>
					<!--/.col-->
				</div>
				<!--/.row-->
			</div>
			<!--/.about-us-content-->
		</div>
		<!--/.container-->

	</section>
	<!--/.about-us-->
	<!--about-us end -->

	<!--travel-box start-->
	<section class="travel-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-travel-boxes" style="background-color: rgba(20,20,20,.8)">
						<div id="desc-tabs" class="desc-tabs">

							<ul class="nav nav-tabs" style="border-right: 1px rgba(20,20,20,.8);" role="tablist">

								<li role="presentation" class="active">
									<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
										<i class="fa fa-globe"></i>
										Histórico Cultural
									</a>
								</li>

								<li role="presentation">
									<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
										<i class="fas fa-mountain"></i>
										Aventura
									</a>
								</li>

								<li role="presentation">
									<a href="#Naturaleza" aria-controls="Naturaleza" role="tab" data-toggle="tab">
										<i class="fa fa-tree"></i>
										Naturaleza
									</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">

								<div role="tabpanel" class="tab-pane active fade in" id="tours">
									<div class="tab-para">

										<div class="row">
												<?php
										$consulta = $conn->query("SELECT * FROM `inicio` WHERE id = '1' ");
										while ($fila = $consulta->fetch_array()) {
											?>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h1 style="color: #fff;"><?php echo utf8_encode($fila['titulo']); ?></h1>
													<hr>
														<h2 style="color: #fff;font-size: 19px;"><?php echo utf8_encode($fila['subtitulo']); ?></h2><!-- /.select-->
														
														<p style="font-size: 15px; color: #fff; font-family: 'arial';"><?php echo utf8_encode($fila['texto1']); ?></p>
												</div>
												<!--/.single-tab-select-box-->
											</div>
											
											<div class="col-lg-2" style="width: 65%;">
											<div class="filtr-item">
										<img width="100%" height="auto" src="<?php echo $fila['img']; ?>" alt="portfolio image" /><br> <br>
										<!-- /.item-title -->
									</div>
											</div>
											<?php 
											}
											?>

										</div>
										<!--/.row-->

				
										<!--/.row-->

									</div>
									<!--/.tab-para-->

						</div>
								<!--/.tabpannel-->

								<div role="tabpanel" class="tab-pane fade in" id="hotels">
									<div class="tab-para">

										<div class="row">
												<?php
										$consulta = $conn->query("SELECT * FROM `inicio` WHERE id = '2' ");
										while ($fila = $consulta->fetch_array()) {
											?>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h1 style="color: #fff;"><?php echo utf8_encode($fila['titulo']); ?></h1>
													<hr>
														<h2 style="color: #fff;font-size: 19px;"><?php echo utf8_encode($fila['subtitulo']); ?></h2><!-- /.select-->
														
														<p style="font-size: 15px; color: #fff; font-family: 'arial';"><?php echo utf8_encode($fila['texto1']); ?></p>
												</div>
												<!--/.single-tab-select-box-->
											</div>
											
											<div class="col-lg-2" style="width: 65%;">
											<div class="filtr-item">
											
											<img width="100%" height="auto" src="<?php echo $fila['img']; ?>" alt="portfolio image" /><br> <br>
										<!-- /.item-title -->
									</div>
											</div>
											<?php 
											}
											?>

										</div>
										<!--/.row-->

										
										<!--/.row-->

									</div>
									<!--/.tab-para-->

						</div>
								<!--/.tabpannel-->


								<div role="tabpanel" class="tab-pane fade in" id="Naturaleza">
									<div class="tab-para">

										<div class="row">
												<?php
										$consulta = $conn->query("SELECT * FROM `inicio` WHERE id = '3' ");
										while ($fila = $consulta->fetch_array()) {
											?>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h1 style="color: #fff;"><?php echo utf8_encode($fila['titulo']); ?></h1>
													<hr>
														<h2 style="color: #fff;font-size: 19px;"><?php echo utf8_encode($fila['subtitulo']); ?></h2><!-- /.select-->
														
														<p style="font-size: 15px; color: #fff; font-family: 'arial';"><?php echo utf8_encode($fila['texto1']); ?></p>
												</div>
												<!--/.single-tab-select-box-->
											</div>
											
											<div class="col-lg-2" style="width: 65%;">
											<div class="filtr-item">
										<img width="100%" height="auto" src="<?php echo $fila['img']; ?>" alt="portfolio image" /><br> <br>
										<!-- /.item-title -->
									</div>
											</div>
											<?php 
											}
											?>

										</div>
										<!--/.row-->

										
										<!--/.row-->

									</div>
									<!--/.tab-para-->

						</div>
								<!--/.tabpannel-->

							</div>
							<!--/.tab content-->
						</div>
						<!--/.desc-tabs-->
					</div>
					<!--/.single-travel-box-->
				</div>
				<!--/.col-->
			</div>
			<!--/.row-->
		</div>
		<!--/.container-->

	</section>
	<!--/.travel-box-->
	<!--travel-box end-->

	<!--service start-->

	<!--/.service-->
	<!--service end-->

	<!--galley start-->
	<section id="gallery" class="gallery">
		<div class="container">
			<div class="gallery-details">
				<div class="gallary-header text-center">
					<h2>
					¡Estos son los destinos más buscados!					</h2>
					
				</div>
				<!--/.gallery-header-->
				<div class="gallery-box">
					<div class="gallery-content">
						<div class="filtr-container">
							<div class="row">
							<?php
								$consulta = $conn->query("SELECT * FROM `turismo` WHERE idturi = '1' ");
								while ($fila = $consulta->fetch_array()) {
				?>
								<div class="col-md-6">
									<div class="filtr-item">
										<img width="570" height="320" src="<?php echo $fila['img']; ?>"  alt="portfolio image" />
										<div class="item-title">
											<a href="turistico.php?pag=<?php echo utf8_encode($fila['lugar']); ?>">
											<?php echo utf8_encode($fila['lugar']); ?>
											</a>
											<p><?php echo utf8_encode($fila['subtitulo']); ?></p>
										</div><!-- /.item-title -->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								<?php } ?>
								<?php
								$consulta = $conn->query("SELECT * FROM `turismo` WHERE idturi = '2' ");
								while ($fila = $consulta->fetch_array()) {
				?>
								<div class="col-md-6">
									<div class="filtr-item">
										<img src="<?php echo $fila['img']; ?>" alt="portfolio image" />
										<div class="item-title">
											<a href="turistico.php?pag=<?php echo utf8_encode($fila['lugar']); ?>">
											<?php echo utf8_encode($fila['lugar']); ?>
											</a>
											<p><?php echo utf8_encode($fila['subtitulo']); ?></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								<?php } ?>
								<?php
								$consulta = $conn->query("SELECT * FROM `turismo` WHERE idturi = '3' ");
								while ($fila = $consulta->fetch_array()) {
				?>
								<div class="col-md-4">
								<div class="filtr-item">
										<img src="<?php echo $fila['img']; ?>" alt="portfolio image" />
										<div class="item-title">
											<a href="turistico.php?pag=<?php echo utf8_encode($fila['lugar']); ?>">
											<?php echo utf8_encode($fila['lugar']); ?>
											</a>
											<p><?php echo utf8_encode($fila['subtitulo']); ?></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								<?php } ?>
								<?php
								$consulta = $conn->query("SELECT * FROM `turismo` WHERE idturi = '4' ");
								while ($fila = $consulta->fetch_array()) {
				?>
								<div class="col-md-4">
								<div class="filtr-item">
										<img src="<?php echo $fila['img']; ?>" alt="portfolio image" />
										<div class="item-title">
											<a href="turistico.php?pag=<?php echo utf8_encode($fila['lugar']); ?>">
											<?php echo utf8_encode($fila['lugar']); ?>
											</a>
											<p><?php echo utf8_encode($fila['subtitulo']); ?></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								<?php } ?>
								<?php
								$consulta = $conn->query("SELECT * FROM `turismo` WHERE idturi = '5' ");
								while ($fila = $consulta->fetch_array()) {
				?>
								<div class="col-md-4">
								<div class="filtr-item">
										<img src="<?php echo $fila['img']; ?>" alt="portfolio image" />
										<div class="item-title">
											<a href="turistico.php?pag=<?php echo utf8_encode($fila['lugar']); ?>">
											<?php echo utf8_encode($fila['lugar']); ?>
											</a>
											<p><?php echo utf8_encode($fila['subtitulo']); ?></p>
										</div> <!-- /.item-title-->
									</div>	<!-- /.filtr-item -->
								</div><!-- /.col -->
								<?php } ?>
								<?php
								$consulta = $conn->query("SELECT * FROM `turismo` WHERE idturi = '9' ");
								while ($fila = $consulta->fetch_array()) {
				?>
								<div class="col-md-8">
								<div class="filtr-item">
										<img src="<?php echo $fila['img']; ?>" alt="portfolio image" />
										<div class="item-title">
											<a href="turistico.php?pag=<?php echo utf8_encode($fila['lugar']); ?>">
											<?php echo utf8_encode($fila['lugar']); ?>
											</a>
											<p><?php echo utf8_encode($fila['subtitulo']); ?></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								<?php } ?>
								
								<?php
								$consulta = $conn->query("SELECT * FROM `turismo` WHERE idturi = '11' ");
								while ($fila = $consulta->fetch_array()) {
				?>
								<div class="col-md-4">
								<div class="filtr-item">
										<img src="<?php echo $fila['img']; ?>" alt="portfolio image" />
										<div class="item-title">
											<a href="turistico.php?pag=<?php echo utf8_encode($fila['lugar']); ?>">
											<?php echo utf8_encode($fila['lugar']); ?>
											</a>
											<p><?php echo utf8_encode($fila['subtitulo']); ?></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								<?php } ?>
								<?php
								$consulta = $conn->query("SELECT * FROM `turismo` WHERE idturi = '8' ");
								while ($fila = $consulta->fetch_array()) {
				?>
								<div class="col-md-4">
								<div class="filtr-item">
										<img src="<?php echo $fila['img']; ?>" alt="portfolio image" />
										<div class="item-title">
											<a href="turistico.php?pag=<?php echo utf8_encode($fila['lugar']); ?>">
											<?php echo utf8_encode($fila['lugar']); ?>
											</a>
											<p><?php echo utf8_encode($fila['subtitulo']); ?></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->
								<?php } ?>
							</div><!-- /.row -->

						</div><!-- /.filtr-container-->
					</div><!-- /.gallery-content -->
				</div>
				<!--/.galley-box-->
			</div>
			<!--/.gallery-details-->
		</div>
		<!--/.container-->

	</section>
	<!--/.gallery-->
	<!--gallery end-->
	<style>
		.discount-offer {
			padding: 120px 0;
			position: relative;
			background: url(https://www.peru.travel/Contenido/Evento/Imagen/pe/37/1.1/Evento/Dia%20de%20San%20Pedro%20y%20San%20Pablo.jpg) no-repeat center fixed;
			background-size: cover;
			z-index: 1;
		}
	</style>

	<!--discount-offer start-->
	<section class="discount-offer" id="event">
		<div class="container">
			<div class="row">
			<?php
								$consulta = $conn->query("SELECT * FROM `evento`");
								while ($fila = $consulta->fetch_array()) {
				?>
				<div class="col-sm-12">
					<div class="dicount-offer-content text-center">
						<h3 style="color:rgb(255, 255, 255)">Evento</h3>
						<h2><?php echo utf8_encode($fila['titulo']); ?></h2>
						<div class="campaign-timer">
							<div id="timer">

								<div class="time time-after" id="days">
									<span></span>
								</div>
								<!--/.time-->
								<div class="time time-after" id="hours">

								</div>
								<!--/.time-->
								<div class="time time-after" id="minutes">

								</div>
								<!--/.time-->
								<div class="time" id="seconds">

								</div>
								<!--/.time-->
							</div>
							<!--/.timer-->
						</div>
						<!--/.campaign-timer-->

						<script>
							function makeTimer() {

								var endTime = new Date("<?php echo $fila['fecha']; ?>");
								var endTime = (Date.parse(endTime)) / 1000;
								var now = new Date();
								var now = (Date.parse(now) / 1000);

								var timeLeft = endTime - now;

								var days = Math.floor(timeLeft / 86400);
								var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
								var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
								var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

								if (hours < "10") {
									hours = "0" + hours;
								}
								if (minutes < "10") {
									minutes = "0" + minutes;
								}
								if (seconds < "10") {
									seconds = "0" + seconds;
								}

								$("#days").html(days + '<span class="camp">Dia</span>');
								$("#hours").html(hours + '<span class="camp">Hora</span>');
								$("#minutes").html(minutes + '<span class="camp">Minuto</span>');
								$("#seconds").html(seconds + '<span class="camp">Segundo</span>');

							}
						</script>
						<div class="<?php echo utf8_encode($fila['link']); ?>">

							<form method="get" action="evento.php">
								<button class="about-view discount-offer-btn" type="submit">ver mas
							</form>
						</div>
					


					</div>
				</div>
			</div>
			<?php } ?>
		</div>

	</section>

	<div class="footer-basic">
  <footer>
    <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Home</a></li>
      <li class="list-inline-item"><a href="#">Services</a></li>
      <li class="list-inline-item"><a href="#">About</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
    </ul>
    <p class="copyright">Company Name © 2018</p>
  </footer>
</div><!-- /.footer-copyright-->
	<!-- footer-copyright end -->




	<script src="assets/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


	<!--bootstrap.min.js-->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="assets/js/bootsnav.js"></script>

	<!-- jquery.filterizr.min.js -->
	<script src="assets/js/jquery.filterizr.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

	<!--jquery-ui.min.js-->
	<script src="assets/js/jquery-ui.min.js"></script>

	<!-- counter js -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>

	<!--owl.carousel.js-->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- jquery.sticky.js -->
	<script src="assets/js/jquery.sticky.js"></script>

	<!--datepicker.js-->
	<script src="assets/js/datepicker.js"></script>

	<!--Custom JS-->
	<script src="assets/js/custom.js"></script>

	<script src="pre.js" charset="utf-8"></script>
</body>

</html>