<?php
require_once("baglan.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Search Bar</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="wrap">
   <div class="search">
   <form action="aramasonuc.php" method="post">
      <input type="text" name="kelime" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
	 <table>
		 <tr>
			 <td>			
			 	<?php
					$GelenKelime	=	filtre($_POST["kelime"]);
					$Kosul			=	"%$GelenKelime%";

					$Sorgu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM esyalar WHERE adi LIKE ?");
					$Sorgu->execute([$Kosul]);
					$KayitSayisi	=	$Sorgu->rowCount();
					$Kayitlar		=	$Sorgu->fetchAll(PDO::FETCH_ASSOC);

					echo "<br><br><br>";
					echo "Bulunan Kayıtlar<br />";
					foreach($Kayitlar as $Satirlar){
						echo $Satirlar["adi"] . "<br />";
					}
				?>
			 </td>
		 </tr>
	 </table>
   </form> 
   </div>
</div>
</body>
</html>
<?php
$VeritabaniBaglantisi	= null;
?>