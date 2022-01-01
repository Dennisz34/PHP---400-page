<?php
   require_once("baglan.php");

	$cardNumber = filtre($_POST["cardNumber"]);
	$cardName   = filtre($_POST["cardName"]);
	$cardCvv    = filtre($_POST["cardCvv"]);
	$cardMonth  = filtre($_POST["cardMonth"]);
	$cardYear  	= filtre($_POST["cardYear"]);
		
$Ekle=$VeritabaniBaglantisi->query("INSERT INTO sanalkard (id,cardNumber,cardName,cardMonth ,cardYear,cardCvv) values ('','$cardNumber','$cardName','$cardCvv','$cardMonth','$cardYear')");

	if($Ekle !== false){
		header("Location:index.php");
		exit();
	}else{
		echo "Sorgu Hatası";
	}

$VeritabaniBaglantisi	=	null;
?>
