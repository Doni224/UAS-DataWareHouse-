<?php 
session_start();
include('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan sekolah</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a  href="daftar_pembelian.php">DAFTAR PEMBELIAN</a></li>
									<li><a class="active" href="kriteria.php">KRITERIA</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar sekolah Start -->
	<div style="background-color:green">
		<div class="container">
		    <div class="section-card" style="padding:40px 20% 24px 20%;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
						<div class="card-content">
									<center><h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar Kriteria</h4></center>
									<table  class="hover dataTablesCustom" style="width:100% ; padding-top: 30px;" style="color:aqua">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Kriteria</center></th>
													<th><center>Keterangan</center></th>
													<th><center>Bobot</center></th>
												</tr>
											</thead>
											<tbody>
											
												<tr>
													<td rowspan="2" ><center>1</center></td>
													<td rowspan="2" ><center>Nama_customer</center></td>
													<td><center></center></td>	
													<td><center>1</center></td>									
													
												</tr>
												<tr>
													
												</tr>
												
												<tr>
													<td rowspan="4"><center>2</center></td>
													<td rowspan="4"><center>Produk Motor</center></td>
													<td><center>Sangat Mahal</center></td>
													<td><center>4</center></td>									
													
												</tr>
												<tr>
													<td><center>Mahal</center></td>
													<td><center>3</center></td>
												</tr>
												<tr>
													<td><center>Murah</center></td>
													<td><center>2</center></td>
												</tr>
												<tr>
												<td><center>Sangat Murah</center></td>
													<td><center>1</center></td>
												</tr>
												<tr>
													<td rowspan="5"><center>3</center></td>
													<td rowspan="5"><center>tanggal_order</center></td>
													<td><center>awal_bulan</center></td>
													<td><center>1</center></td>
																					
													
												</tr>
												<tr>
												<td><center>pertengahan_bulan</center></td>
													<td><center>2</center></td>
												</tr>
												<tr>
													<td><center>akhir_bulan</center></td>
													<td><center>2</center></td>
												</tr>
												<tr>
													<td><center></center></td>
													<td><center></center></td>
												</tr>
												<tr>
													<td><center>-</center></td>
													<td><center>-</center> </td>
												</tr>
												<tr>
													<td rowspan="4"><center>4</center></td>
													<td rowspan="4"><center>tanggal_tersedia</center></td>
													<td><center>awal_bulan</center></td>
													<td><center>1</center></td>									
													
												</tr>
												<tr>
													<td><center>pertengahan_bulan</center></td>
													<td><center>2</center></td>
												</tr>
												<tr>
													<td><center>akhir_bulan</center></td>
													<td><center>3</center></td>
												</tr>
												<tr>
													<td><center>-</center></td>
													<td><center>-</center></td>
												</tr>
												
											</tbody>
									</table>
									</div>
									
							</div>
							
                        </div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar sekolah End -->

	

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: blue">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan sekolah 2021.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  	$(document).ready(function(){
		$('.parallax').parallax();
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>