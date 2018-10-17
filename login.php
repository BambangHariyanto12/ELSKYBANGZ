<?php
include"konek.php";
ob_start();
session_start();
if(isset($_SESSION['admin_password'])) header("location:index.php?");

if(isset($_POST['input'])){
  $email=$_POST['email'];
  $password=md5($_POST['password']);

  $sql=mysqli_query($koneksi,"SELECT * FROM admin WHERE email='$email' AND password='$password'");
  if(mysqli_num_rows($sql)>0){
    $data=mysqli_fetch_array($sql);
    $_SESSION['admin_id']=$data['id'];
    $_SESSION['admin_username']=$data['username'];
    $_SESSION['admin_password']=$data['password'];

   // $_SESSION['admin_email']=$data['email'];

  //   header("location:index.php?sukses-login");
  // }else{
  //   header("location:login.php?error");
  // }

    if()


}
?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Animated Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free Web Designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href='web/css/bootstrap.min.css' media='all' rel='stylesheet'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="web/css/animate.min.css"> 
<!-- //Custom Theme files -->
<!-- web font -->
<link href='web///fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font --> 
</head>
<body>
	<!-- main-agileits -->
	<div class="agileits">
		<h1>Disnakertrans Lampung</h1>
		<div class="w3-agileits-info">
			<form class='form animate-form' id='form1' action="" method="POST">
				<p class="w3agileits">Login Here</p>
				<!-- <div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='username'>Username</label> 
					<input class='form-control' id='username' name='username' placeholder='Username' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div> -->
				<div class='form-group has-feedback wthree'>
					<label class='control-label sr-only' for='email'>Email address</label> 
					<input class='form-control' id='email' name='email' placeholder='Email address' type='text'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback agile'>
					<label class='control-label sr-only' for='password'>Password</label> 
					<input class='form-control w3l' id='password' name='password' placeholder='Password' type='password'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback agile'>
					<?php  if(isset($_GET['error'])) { ?>
					<b style="color: red">MAAF PASSWORD SALAH</b>
					<?php } ?>
					
				</div>
				<div class='submit w3-agile'>
					<input class='btn btn-lg' type='submit' name="input" value='LOGIN'>
				</div>
			</form>
		</div>	
	</div>	
	<!-- //agileits -->
	<!-- copyright -->
	<div class="w3-agile-copyright">
		<p class="agileinfo">Login Form . All rights reserved | <a href="http://w3layouts.com/" target="_blank"><?php echo date("Y"); ?></a></p>
	</div>
	<!-- //copyright -->  
	<!-- js -->
	<script src="web/js/jquery-2.2.3.min.js"></script>
	<script src='web/js/jquery.validate.min.js'></script>
	<script src='web/js/formAnimation.js'></script>
	<script src='web/js/shake.js'></script> 
	<!-- //js -->
</body>
</html>