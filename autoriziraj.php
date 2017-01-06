<?php  

include_once 'config.php';


if(isset($_POST["autorizacija"])){

	
	$izraz=$veza->prepare("select * from operater where email=:korisnik and lozinka=md5(:lozinka)");
	unset($_POST["autorizacija"]);
	$izraz->execute($_POST);
	$operater = $izraz->fetch(PDO::FETCH_OBJ);

	if($operater!=null){

		$_SESSION["autoriziran"]=$operater;
		if ($_SESSION["autoriziran"]->uloga == "administrator") {
			header("location: privatno/admin/index.php");
		} else if ($_SESSION["autoriziran"]->uloga == "korisnik") {
			header("location: index.php");
		}
	} 
	
	
	else {
		header("location: autorizacija.php?korisnik=".$_POST["korisnik"]);
	}
}