<?php
    require_once("baglan.php");



	$email      = $_POST["email"];
	$password   = $_POST["password"];
	
	if(($email != "") and ($password != ""))
	{
		$KontrolSorgusu = $VeritabaniBaglantisi ->prepare("SELECT * FROM kayit WHERE email = ? AND sifre = ?");
		$KontrolSorgusu -> execute([$email,$password]);
		$KullaniciSayisi	=	$KontrolSorgusu->rowCount();
		//$KullaniciKaydi		=	$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);

		if($KullaniciSayisi>0)
		{
			//header("Location:anasayfa.php");
			header("Location:anasayfa.php");
			exit();
		}
		else
		{
			//header("Location:anasayfa.php");
			header("Location:index.php");
			exit();
		}
	}




?>
