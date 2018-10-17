<?php 
include'konek.php';
if(isset($_POST['kirim']))
{
	$nik=$_POST['nik'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$waktu=$_POST['waktu'];
	$agama=$_POST['agama'];
	$provinsi=$_POST['provinsi'];
	$jk=$_POST['jk'];
	$hp=$_POST['hp'];

	$query=mysqli_query($koneksi,"INSERT INTO member VALUES('','$nik','$username','$email','$password','$waktu','$agama','$provinsi','$jk','$hp','0','0')");

	echo "<script>alert('data berhasil di upload');</script>";
	echo "<script>location='login.php';</script>";
}
// else
// {
// 	echo "<script>alert('registrasi error');</script>";
// 	echo "<script>location='buatakun.php'</script>";
// }

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Politics a Society and People Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Politics Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--/script-->
<link href='//fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<?php include 'header.php';  ?>
   <!--/start-banner-->
	<div class="banner1">
		<div class="container">
		</div>
	</div>
	<!--//end-banner-->
	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="about-grids">
				<div class="col-md-8 about-grid-left">
					<div class="history">
						<form action="" method="POST">
							<h3>BUAT AKUN</h3>
							<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<input type="text" name="nik" class="form-control" placeholder="NIK" required="off" minlength="10" maxlength="20">
					</div>

					<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<input type="text" name="username" class="form-control" placeholder="USERNAME" required="off">
					</div>

					<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<input type="email" name="email" class="form-control" placeholder="E-mail" required="off">
					</div>

					<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<input type="password" name="password" class="form-control" placeholder="password" required="off">
					</div>

					<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<input type="date" name="waktu" class="form-control" required="off">
					</div>

					<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<select name="agama" class="form-control">
							<option value="">PILIH AGAMA</option>
							<option value="ISLAM">ISLAM</option>
							<option value="KRISTEN">KRISTEN</option>
							<option value="BUDHA">BUDHA</option>
							<option value="HINDU">HINDU</option>
							<option value="KHATOLIK">KHATOLIK</option>
						</select>
					</div>

					<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<select name="provinsi" class="form-control">
							<option value="">PILIH PROVINSI</option>
							<option value="LAMPUNG">LAMPUNG</option>
							<option value="SUMATRA UTARA">SUMATRA UTARA</option>
							<option value="DKI JAKARTA">DKI JAKARTA</option>
							<option value="JAWA BARAT">JAWA BARAT</option>
						</select>
					</div>
					<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<select name="jk" class="form-control">
							<option value="">PILIH JENIS KELAMIN</option>
							<option value="LAKI LAKI">LAKI-LAKI</option>
							<option value="PEREMPUAN">PEREMPUAN</option>
						</select>
					</div>

					
					<div class="input-group">
						<span class="input-group-addon">INPUT</span>
						<input type="text" name="hp" class="form-control" placeholder="No HP : 0857 9090 2010" required="off" minlength="10" maxlength="14">
					</div>

				<!-- 	<div class="input-group">
						<span class="input-group-addon"><b style="color: red">RCAPTA => </b></span><span class="input-group-addon" style="color: blue">1452a</span>
						<input type="password" class="form-control" placeholder="masukan RCAPTA" required="off">
					</div> -->

				

					<!-- <input type="submit" name="" value="kirim"> -->
                    <div style="padding-left: 0px; padding-top: 20px; padding-bottom: 30px;">
                    	  <button type="reset" class="btn btn-outline btn-danger" style="font-weight: bold;">HAPUS</button>
                           <button type="submit" name="kirim" class="btn btn-outline btn-success" style="font-weight: bold;">BUAT AKUN</button>
                    </div>


					
							
						</form>
							<div class="gallery phi-bottom">
							  <h3 class="tittle">INFORMASI</h3>
							<div class="gallery-images">
								<div class="course_demo1">
								  <ul id="flexiselDemo1">	
									 <li style="padding:5px;">
										<div class="alert alert-danger" role="alert">
											<strong>Well done!</strong> You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.
										</div>					
									 </li>
									 <li style="padding:5px;">
										<div class="alert alert-danger" role="alert">
											<strong>Well done!</strong> You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.
										</div>					
									 </li>
									 <li style="padding:5px;">
										<div class="alert alert-danger" role="alert">
											<strong>Well done!</strong> You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.
										</div>					
									 </li>
									 <li style="padding:5px;">
										<div class="alert alert-danger" role="alert">
											<strong>Well done!</strong> You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.
										</div>					
									 </li>

									<!--  <li>
										<a href="single.html"><img src="images/mg1.jpg" alt="" /></a>						
									 </li>
									 <li>
										<a href="single.html"><img src="images/mg2.jpg" alt="" /></a>
									  </li>	
									 <li>
										<a href="single.html"><img src="images/mg3.jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="single.html"><img src="images/mg4.jpg" alt="" /></a>
									 </li>	 -->

									  
								 </ul>
							 </div>
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>
							</div>
							<!--  <a class="more" href="single.html">More  +</a> -->
						</div>
					</div>
				</div>
				<div class="col-md-4 mag-inner-right">
				  <div class="connect">
				    <h4 class="side" ><i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i>STAY CONNECTED</h4>
					  <ul class="stay">
							<div class="alert alert-success" role="alert">
								<strong>Well done!</strong> You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.
							</div>
							<div class="alert alert-success" role="alert">
								<strong>Well done!</strong> You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.You successfully read this important alert message.
							</div>
							
					  </ul>
			      </div>
				    <div class="modern">
				      <h4 class="side"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Make them Famous</h4>
					  <div id="example1">
			 	        <div id="owl-demo" class="owl-carousel text-center">
					      <div class="item">
					
							<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
					     </div>
						 <div class="item">
					
							<img class="img-responsive lot" src="images/p2.jpg" alt=""/>
					    </div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p33.jpg" alt=""/>
					    </div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
					</div>
					<div class="item">
					
							<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
					</div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p2.jpg" alt=""/>
					</div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p33.jpg" alt=""/>
					</div>
						<div class="item">
					
							<img class="img-responsive lot" src="images/p1.jpg" alt=""/>
					</div>
				</div>
				</div>
				<!-- requried-jsfiles-for owl -->
										<script src="js/owl.carousel.js"></script>
										  <script>
										  $(document).ready(function() {
											   $("#owl-demo").owlCarousel({
												items :1,
												lazyLoad : true,
												autoPlay : false,
												navigation : true,
												navigationText :  true,
												pagination : false,
												responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
												});
										  });
										</script>
						<!-- //requried-jsfiles-for owl -->
						</div>
							<!-- <h4 class="side"><i class="glyphicon glyphicon-file" aria-hidden="true"></i>Popular Posts</h4>
								<div class="edit-pics">
							      <div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f4.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="single.html">There are many variations of passages.</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Nov 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
										<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f3.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="single.html">There are many variations of passages.</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Nov 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
										<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f2.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="single.html">There are many variations of passages.</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Nov 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
										<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="images/f1.jpg" class="img-responsive" alt=""/>

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="single.html">There are many variations of passages.</a></h5>
												 <div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>Nov 22, 2015 <a href="#"><i class="glyphicon glyphicon-comment"></i>0 </a></div>
											 </div>
											<div class="clearfix"></div>
										</div>
									</div>-->
							<!--//edit-pics-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!--/start-footer-section-->
			<div class="footer-section">
			   <div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-grid">
						<h4>EDITOR PICKS</h4>
						  <div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/f1.jpg" class="img-responsive" alt=""/>

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Nov 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/f2.jpg" class="img-responsive" alt=""/>

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Nov 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/f3.jpg" class="img-responsive" alt=""/>

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Nov 22, 2015</div>
							     </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 footer-grid">
							<h4>About Politics</h4>
								<ul class="td-pb-padding-side">
									<li><a href="#">Mission</a></li>
									<li><a href="#">Organization</a></li>
									<li><a href="#">Our Achievements</a></li>
									<li><a href="#">Literature</a></li>
									<li><a href="#">Our Inspiration</a></li>
									<li><a href="#">Inc Sessions</a></li>
								</ul>
						</div>
						<div class="col-md-4 footer-grid">
								<h4>MEDIA RESOURCES</h4>
								<ul class="td-pb-padding-side">
									<li><a href="#">Speeches</a></li>
									<li><a href="#">Public Forum</a></li>
									<li><a href="#">Photo Gallery</a></li>
									<li><a href="#">Books and Monographs</a></li>
								</ul>
								<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
	<!--//end-footer-section-->
			<!--/start-copyright-section-->
				<div class="copyright">
						  <p>&copy; 2015 Politics. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
					</div>


				<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<!--JS-->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->

</body>
</html>