<?php 
include("../ayar.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Yazılar</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
 <nav class = "navbar navbar-inverse navbar-fixed-top">
  <div class ="conteiner-fluid">
   <div class = "row">
   <div class = "col-xs-12 col-md-8">
		<h2><p class="text-primary">YÖNETİM PANELİ</p></h2>
   </div>
    <div class = "col-xs-6 col-md-4">
	<div class = "btn-group">
	<a href="yonetimpaneli.php" class="btn btn-lg btn-primary">Hakkımda</a>
	<a href="ekle.php" class="btn btn-lg btn-primary">Yazılar</a>
	<a href="kategoriekle.php" class="btn btn-lg btn-primary">Kategori Ekle</a>
	<a href="logout.php" class="btn btn-lg btn-primary">Çıkış</a>
	</div>
    </div>
    </div>
  </div>
 </div>
</nav>





<div class="container" style="margin-top:100px;">
<div class="col-md-6">
<form action="" method="post">
	
	<table class="table">
		
		<tr>
			<td>Başlık</td>
			<td><input type="text" name="baslik" class="form-control" ></td>
		</tr>

		<tr>
			<td>İçerik</td>
			<td><textarea name="icerik" class="form-control" ></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
		</tr>

	</table>

</form>


<?php 

if ($_POST) { 
	
	$baslik = $_POST['baslik']; 
	$icerik = $_POST['icerik'];

	if ($baslik<>"" && $icerik<>"") { 
		
		if ($baglanti->query("INSERT INTO makale (baslik, icerik) VALUES ('$baslik','$icerik')")) 
		{
			echo "Veri Eklendi"; 
		}
		else
		{
			echo "Hata oluştu";
		}
	}
}

?>
</div>


<div class="col-md-7">
<table class="table">
	
	<tr>
		<th>Numara</th>
		<th>Başlık</th>
		<th>İçerik</th>
		<th>Düzenle</th>
		<th>Sil</th>
	</tr>



<?php 

$sorgu = $baglanti->query("SELECT * FROM makale"); 

while ($sonuc = $sorgu->fetch_assoc()) { 

$id = $sonuc['id']; 
$baslik = $sonuc['baslik'];
$icerik = $sonuc['icerik'];


?>
	
	<tr>
		<td><?php echo $id;  ?></td>
		<td><?php echo $baslik; ?></td>
		<td><?php echo $icerik; ?></td>
		<td><a href="duzenle2.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
		<td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
	</tr>

<?php }  ?>



</table>
</div>
</div>
</body>
</html>