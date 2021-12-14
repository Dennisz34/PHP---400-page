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
<!-- partial:index.partial.html -->
<div class="wrap">
   <div class="search">
   <form action="aramasonuc.php" method="post">
      <input type="text" name="kelime" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </form>
   </div>
</div>
<!-- partial -->
  
</body>
</html>




<!-- // <!doctype html>
// <html lang="tr-TR">
// <head>
// <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
// <meta http-equiv="Content-Language" content="tr">
// <meta charset="utf-8">
// <title>Extra Eğitim</title>
// </head>

// <body>
// 	<br /><br /><br /><br /><br />
// 	<form action="aramasonuc.php" method="post">
// 		<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
// 			<tr>
// 				<td><input type="text" name="kelime" style="width: 100%; height: 30px; margin-bottom: 20px; padding: 0 20px;"></td>
// 			</tr>
// 			<tr>
// 				<td align="center"><input type="submit" value="Arama Yap" style="padding: 0 100px; height: 30px;"></td>
// 			</tr>
// 		</table>
// 	</form>
// </body>
// </html> -->


<?php
$VeritabaniBaglantisi	= null;
?>