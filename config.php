 <?php
include_once 'config.php';
session_start();

if($_SERVER["SERVER_NAME"]==="localhost"){
	$putanja="/dionizapp/";
	$server="localhost";
	$imeBaze="";
	$korisnik="root";
	$lozinka="";
}else{
	$putanja="/Dionizapp/";
	$server="";
	$imeBaze="";
	$korisnik="";
	$lozinka="";
}


$veza = new PDO(
	"mysql:host=" . $server . ";dbname=" . $imeBaze,
	$korisnik,
	$lozinka,
	array(
		PDO::ATTR_EMULATE_PREPARES=> false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	)
);
