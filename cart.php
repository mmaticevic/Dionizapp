<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'head.php'; ?>

</head>
<body>

<?php include_once 'header.php'; ?>



<section id="cart_items">
		<div class="container">
			
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image" style="text-align: center;">Slika</td>
							<td class="description" style="text-align: center;">Proizvod</td>
							<td class="price" >Cijena</td>
							<td class="quantity" ">Komada</td>
							<td class="total" >Ukupno</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/1.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Graševina 2011 </a></h4>
								<p>Vinarija Mihalj</p>
							</td>
							<td class="cart_price">
								<p>50 kn</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">50 kn</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/1.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Graševina 2011 </a></h4>
								<p>Vinarija Mihalj</p>
							</td>
							<td class="cart_price">
								<p>50 kn</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">50 kn</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/1.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Graševina 2011 </a></h4>
								<p>Vinarija Mihalj</p>
							</td>
							<td class="cart_price">
								<p>50 kn</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">50 kn</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	


<?php include_once 'footer.php'; ?>

<?php include_once 'script.php'; ?>
</body>	
</html>