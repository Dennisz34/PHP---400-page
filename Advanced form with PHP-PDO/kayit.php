<?php
    require_once("baglan.php");


	$ad         = filtre($_POST["ad"]);
	$soyad      = filtre($_POST["soyad"]);
	$email      = filtre($_POST["email"]);
	$password1  = filtre($_POST["password1"]);
	$password2  = filtre($_POST["password2"]);
		

	if($password1 == $password2)
	{
		$Ekle		=	$VeritabaniBaglantisi->query("INSERT INTO kayit (ad,soyad,email ,sifre) values ('$ad','$soyad','$email','$password1')");
	}

	if($Ekle !== false){
		header("Location:index.php");
		exit();
	}else{
		echo "Sorgu Hatası";
	}


$VeritabaniBaglantisi	=	null;
?>
