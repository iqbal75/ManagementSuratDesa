<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" href="<?php echo base_url() . 'assets/gambar/LogoDesa1.png' ?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/bootstrap/css/bootstrap.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/animate/animate.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/css-hamburgers/hamburgers.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/select2/select2.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/util.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/main.css' ?>">
	<!--===============================================================================================-->
	<?php include 'Template/Header.php'; ?>
</head>

<body>
	<style type="text/css">
		body {
			height: 100%;
			font-family: Poppins-Regular, sans-serif;
		}

		.limiter {
			width: 100%;
			margin: 0 auto;
		}

		.container-login100 {
			width: 100%;
			min-height: 100vh;
			display: -webkit-box;
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 15px;
			background-image: linear-gradient(to right top, #0b8106, #0b8d07, #0b9909, #0ba50a, #0ab10c, #36bc08, #50c604, #67d100, #8fdc00, #b3e600, #d6f000, #f9f90b);
		}

		.wrap-login100 {
			width: 960px;
			background: #FFF8DC;
			border-radius: 10px;
			overflow: hidden;

			display: -webkit-box;
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			padding: 130px 130px 33px 95px;
			box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);

		}

		.input100:focus+.focus-input100+.symbol-input100 {
			color: #e3ee0b;
			padding-left: 28px;
		}

		.focus-input100 {
			display: block;
			position: absolute;
			border-radius: 25px;
			bottom: 0;
			left: 0;
			z-index: -1;
			width: 100%;
			height: 100%;
			box-shadow: 0px 0px 0px 0px;
			color: rgb(253, 215, 3);
		}

		.container-login100-form-btn {
			width: 100%;
			display: -webkit-box;
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			padding-top: 20px;
		}

		.col-md-12 input[type="submit"] {
			font-family: Montserrat-Bold;
			font-size: 15px;
			line-height: 1.5;
			color: #fff;
			text-transform: uppercase;
			width: 60%;
			height: 50px;
			/*margin-top: -10px;*/
			border-radius: 25px;
			background: #000;
			display: -webkit-box;
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 0 25px;
			background-image: linear-gradient(to right top, #0b8106, #0b8d07, #0b9909, #0ba50a, #0ab10c, #36bc08, #50c604, #67d100, #8fdc00, #b3e600, #d6f000, #f9f90b);

			-webkit-transition: all 0.4s;
			-o-transition: all 0.4s;
			-moz-transition: all 0.4s;
			transition: all 0.4s;
		}

		.col-md-12 input[type="submit"]:hover {
			background-image: linear-gradient(to left bottom, #0b8106, #0b8d07, #0b9909, #0ba50a, #0ab10c, #36bc08, #50c604, #67d100, #8fdc00, #b3e600, #d6f000, #f9f90b);
		}
	</style>

	<div class="limiter">



		<div class="container-login100 ">



			<div class="wrap-login100" style=" background: linear-gradient(rgba(248, 248, 255, 0.7), rgba(248, 248, 255, 0.7)) fixed center center;">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url() . 'assets/gambar/LogoDesa1.png' ?>" alt="IMG" width="80%">
				</div>

				<form class="login100-form validate-form text-center" action="<?php echo base_url('Login/aksi_login2'); ?>" method="post">
					<span class="login100-form-title">
						<h4 class="text-gray-600 mb-4"><strong>Admin Login</strong></h4>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<div class="col-md-12">
							<center><input type="submit" value="Login"></center>
						</div>
					</div>
					<br>
					<?php echo $this->session->flashdata('message'); ?>


					<div class="text-center p-t-116">
						<a class="txt2" href="#">
							<!-- Create your Account -->
							<!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/popper.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/select2/select2.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/tilt/tilt.jquery.min.js' ?>"></script>

	<!--===============================================================================================-->
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?php echo base_url() . 'assets/js/main.js' ?>"></script>
	<?php include 'Template/Footer.php'; ?>
</body>

</html>