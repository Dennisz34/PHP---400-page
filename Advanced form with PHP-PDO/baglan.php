<?php
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=form;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		echo "Bağlantı Hatası";
		echo "Hata Açıklaması : " . $Hata->getMessage();
		die();
	}

function filtre($Deger)
{
	$BoslukSil			=	trim($Deger);
	$TaglariTemizle		=	strip_tags($BoslukSil);
	$EtkisizYap			=	htmlspecialchars($TaglariTemizle, ENT_QUOTES);
	$Sonuc				=	$EtkisizYap;
	return $Sonuc;
}

?>