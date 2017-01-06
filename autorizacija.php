<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php'; ?>

</head>
<body>

	<?php include_once 'header.php'; ?>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Prijavite se</h2>
						<form action="autoriziraj.php" method="POST">
							<input  required="required" placeholder="korisnicko ime ili e-mail" name="korisnik" type="text" value="<?php echo isset($_GET["korisnik"]) ? $_GET["korisnik"] : "" ?>"/>

							<input  required="required" placeholder="zaporka" name="lozinka" type="password"/>
							
							<button " class="btn btn-default" name="autorizacija" type="submit" value="Prijava">Prijava</button>
						</form>
						<?php 
						if (isset($_GET["korisnik"])):
							?>
						<div class="alert alert-success">
							<strong>Kriva lozinka!</strong> </a>.
						</div>
						<?php 
						endif;
						?>
					</div><!--/login form-->
				</div>


				<div class="col-sm-1">
					<h2 class="or">ili</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--Reg form-->
						<h2>Novi korisnik</h2>
						<form action="#">
							
							<input type="email" placeholder="Email"/>
							<input type="password" placeholder="zaporka"/>
							<input type="password" placeholder="zaporka ponovo"/>
							<button type="submit" class="btn btn-default">Registracija</button>
						</form>
					</div><!--/Reg form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	



	<?php include_once 'footer.php'; ?>

	<?php include_once 'script.php'; ?>

</body>
</html>