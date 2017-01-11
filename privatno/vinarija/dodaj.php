

<?php include_once '../../config.php';
$izraz = $veza -> prepare("select * from mjesto");
$izraz -> execute();
$mjesto = $izraz -> fetchAll(PDO::FETCH_OBJ);

if ($_POST) {

	//INSERT VINARIJA

	$izraz=$veza->prepare('INSERT INTO vinarija (oib,naziv,adresa,mjesto,telefon,fax,mobitel,email,web,facebook,logo,ziroracun) 
		VALUES (:oib,:naziv,:adresa,:mjesto,:telefon,:fax,:mobitel,:email,:web,:facebook,:logo,:ziroracun)');
	$izraz->execute($_POST);	

	
	header("location: index.php");
}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- head -->
<?php include_once '../../head.php'; ?>
<!-- /head -->
</head>
<!-- header -->
<?php include_once '../../header.php'; ?>
<!-- /header -->
<!-- Admin panel -->

<section>
		<div class="container">
			<div class="row">
			<?php include_once '../admin/adminleft.php'; ?>



				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Dodaj vinariju</h2>
						
						<div class="signup-form"><!--Reg form-->
						
							<form  method="POST" >
								<label for="usr">OIB:</label>
								<input type="text" name="oib" maxlength="11" placeholder="OIB" >

								<label for="usr">Naziv vinarije:</label>
								<input type="text" name="naziv" placeholder="Naziv vinarije" >

								<label for="usr">Adresa:</label>
								<input type="text" name="adresa"  placeholder="Adresa" >

								<label for="usr">Mjesto:</label>
								<select name="mjesto" placeholder="mjesto">
									<option value = "0">Mjesto</option>


									<?php
									foreach ($mjesto as $mjesto) : ?>

									<option value="<?php echo $mjesto -> id; ?>"><?php echo $mjesto -> naselje; ?></option>

									<?php endforeach; ?>
								</select>


								<label for="usr">Telefon:</label>
								<input type="text" name="telefon" placeholder="Telefon" >

								<label for="usr">Fax:</label>
								<input type="text" name="fax" placeholder="Fax" >

								<label for="usr">Mobitel:</label>
								<input type="text" name="mobitel" placeholder="Mobitel">

								<label for="usr">Email:</label>
								<input type="text" name="email" placeholder="Email">

								<label for="usr">Web:</label>
								<input type="text" name="web" placeholder="Web" >

								<label for="usr">Facebook:</label>
								<input type="text" name="facebook" placeholder="Facebook" >

								<label for="usr">Logo:</label>
								<input type="text" name="logo" placeholder="Logo">

								<label for="usr">Ziro-račun:</label>
								<input type="text" name="ziroracun" placeholder="Ziro-račun">


							

							<button type="submit"  class="btn btn-default">Spremi</button>
						</form>
							
					</div>
      



					</div>
				</div>



			</div>
		</div>
</section>
<br>
<!-- /Admin panel -->


<!-- footer -->
<?php include_once '../../footer.php'; ?>
<!-- /footer -->

<!-- script -->
<?php include_once '../../script.php';
$veza=null;
 ?>
<!-- /script -->


<body>
	
</body>
</html>