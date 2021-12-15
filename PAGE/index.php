<?php
try{
	$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=uygulama;charset=UTF8","root","");
}catch(PDOException $Hata){
	echo "Bağlantı Sorunu<br />" . $Hata->getMessage();
	die();
}

if(isset($_REQUEST["Sayfalama"])){
	$GelenSayfalama		=	$_REQUEST["Sayfalama"];
}else{
	$GelenSayfalama		=	1;
}

$SayfalamaIcinSolVeSagButonSayisi		=	2;
$SayfaBasinaGosterilecekKayitSayisi		=	5;
$ToplamKayitSayisiSorgusu				=	$VeritabaniBaglantisi->prepare("SELECT * FROM urunler");
$ToplamKayitSayisiSorgusu->execute();
$ToplamKayitSayisi						=	$ToplamKayitSayisiSorgusu->rowCount();
$SayfalamayaBaslanacakKayitSayisi		=	($GelenSayfalama*$SayfaBasinaGosterilecekKayitSayisi)-$SayfaBasinaGosterilecekKayitSayisi;
$BulunanSayfaSayisi						=	ceil($ToplamKayitSayisi/$SayfaBasinaGosterilecekKayitSayisi);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sortable Tabular Data</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<body>
 <div id="wrapper">
  <h1>Dynamic pages</h1>
  <table id="keywords" cellspacing="0" cellpadding="0">
  <?php
		$UrunSorgusu 	= $VeritabaniBaglantisi -> prepare("SELECT * FROM urunler ORDER BY id ASC LIMIT $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi");
		$UrunSorgusu -> execute();
		$UrunSorgusuKayitSayisi	=	$UrunSorgusu -> rowCount();
		$UrunSorgusuKayitlari	=	$UrunSorgusu->fetchAll(PDO::FETCH_ASSOC);
		foreach($UrunSorgusuKayitlari as $Kayitlar)
		   {
			echo "<tr height='30'>";
			echo "<td width='375' align='left'>" . $Kayitlar["urunadi"] . "<td>";
			echo "<td width='100' align='right'>" . $Kayitlar["urunfiyati"] . " " . $Kayitlar["parabirimi"] . "<td>";
			echo "</tr>";
		   }
	?>
    <thead>
      <tr>
	 
        <th><span>Name of the product</span></th>
		<th></th>
		<th><span>Product price</span></th>
		
        
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
	<div class="SayfalamaAlaniKapsayicisi">
		<div class="SayfalamaAlaniIciMetinAlaniKapsayicisi">
			Toplam <?php echo $BulunanSayfaSayisi; ?> sayfada, <?php echo $ToplamKayitSayisi; ?> adet kayıt bulunmaktadır.
		</div>
		<div class="SayfalamaAlaniIciNumaralandirmaAlaniKapsayicisi">
			<?php
			if($GelenSayfalama>1){
				echo "<span class='Pasif'><a href='index.php?Sayfalama=1'><<</a></span>";
				$SayfalamaIcinSayfaDegeriniBirGeriAl	=	$GelenSayfalama-1;
				echo " <span class='Pasif'><a href='index.php?Sayfalama=" . $SayfalamaIcinSayfaDegeriniBirGeriAl . "'><</a></span>";
			}
			for($SayfalamaIcinSayfaIndexDegeri=$GelenSayfalama-$SayfalamaIcinSolVeSagButonSayisi; 
			$SayfalamaIcinSayfaIndexDegeri<=$GelenSayfalama+$SayfalamaIcinSolVeSagButonSayisi; 
			$SayfalamaIcinSayfaIndexDegeri++){
				if(($SayfalamaIcinSayfaIndexDegeri>0) and ($SayfalamaIcinSayfaIndexDegeri<=$BulunanSayfaSayisi)){
					if($GelenSayfalama==$SayfalamaIcinSayfaIndexDegeri){
						echo " <span class='Aktif'>" . $SayfalamaIcinSayfaIndexDegeri . "</span>";
					}else{
						echo " <span class='Pasif'><a href='index.php?Sayfalama=" . $SayfalamaIcinSayfaIndexDegeri ."'>" . $SayfalamaIcinSayfaIndexDegeri . "</a></span>";
					}
				}
			}
			if($GelenSayfalama!=$BulunanSayfaSayisi){
				$SayfalamaIcinSayfaDegeriniBirIleriAl	=	$GelenSayfalama+1;
				echo " <span class='Pasif'><a href='index.php?Sayfalama=" . $SayfalamaIcinSayfaDegeriniBirIleriAl . "'>></a></span>";
				echo " <span class='Pasif'><a href='index.php?Sayfalama=" . $BulunanSayfaSayisi . "'>>></a></span>";
			}
			?>
		</div>
 </div> 
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js'>
</script><script  src="./script.js"></script>
</body>
</html>
<?php
	$VeritabaniBaglantisi	=	null;
?>