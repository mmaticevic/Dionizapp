					     
<div class="col-sm-4">

	<div class="product-image-wrapper">
		<div class="single-products">
			<div class="productinfo text-center">
				<a href="#">  <img src="img/<?php 

					if (file_exists("img/" . $osoba->oib . ".jpg")) {
						echo $osoba->oib;
					}else{
						echo "nepoznato";
					}



					?>.jpg" alt="..." class="img-thumbnail"></a>
					<h5><?php echo $osoba->ime  ?> </h5>
					<h5> <?php echo $osoba->prezime ?></h5>
					<h3>OIB: <?php echo $osoba->oib ?></h3>

					<h5> <?php echo $osoba->naselje ?></h5>
					<a href="#" class="btn btn-danger btn-block "><i class="fa fa-eraser" aria-hidden="true"></i></a>
					<a href="#" class="btn btn-info btn-block "><i class="fa fa-refresh" aria-hidden="true"></i></a>
					<a href="#" class="btn btn-success btn-block "><i class="fa fa-plus" aria-hidden="true"></i></a>
				</div>
				
			</div>
			
		</div>
	</div>				


	