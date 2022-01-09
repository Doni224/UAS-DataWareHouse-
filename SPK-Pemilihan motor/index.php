<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Motor</title>
	<meta property="og:image" content="assets/image/laptop.jpg" />
	<meta name="description" content="Leppi adalah aplikasi Sistem Pendukung Keputusan Laptop berbasis Metode Weight Product">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
	<div class="navbar-fixed" style="background-color:green">
	<nav>
    	<div class="container" >
						<div class="nav-wrapper" style="color:blueviolet">
								<ul class="left" style="margin-left: -52px;">
									<li><a class="active" href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a href="daftar_pembelian.php">DAFTAR PEMBELIAN</a></li>
									<li><a href="kriteria.php">KRITERIA</a></li>
									
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
    <!-- Body Start -->

		<!-- Jumbotron Start -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center white-text" style="font-size: 40px; ">SISTEM PENDUKUNG KEPUTUSAN MENGGUNAKAN METODE TOPSIS</h1>
					<div class="row center">
						<h5 class="header jarak-button col s12 light" style="color:aqua" style="margin-bottom: 0px; font-size: 26px">PEMILIHAN PRODUCT MOTOR</h5>
					</div>
					<div class="row center" \>
								<a href="rekomendasi.php" id="download-button" class="waves-effect waves-light btn-large" style="margin-top: 40px; border-radius:5px;" >Pilih Rekomendasi</a>
							</div>
				</div>
			</div>
			<div class="parallax" style="color: green"><img src="assets/image/harley.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->
	
    <!-- Body End -->


    <!-- Footer End -->
    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>