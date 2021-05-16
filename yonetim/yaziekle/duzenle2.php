<?php 
include("../ayar.php");  
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>yazi ekle</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

<?php 

$sorgu = $baglanti->query("SELECT * FROM makale WHERE id =".(int)$_GET['id']); 
$sonuc = $sorgu->fetch_assoc(); 

?>

<div class="container">
<div class="col-md-6">

<form action="" method="post">
	
	<table class="table">
		
		<tr>
			<td>Başlık</td>
			<td><input type="text" name="baslik" class="form-control" value="<?php echo $sonuc['baslik'];  ?>"></td>
		</tr>

		<tr>
			<td>İçerik</td>
			<td><textarea name="icerik" class="ckeditor"><?php echo $sonuc['icerik']; ?></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { 
	
	$baslik = $_POST['baslik']; 
	$icerik = $_POST['icerik'];

	if ($baslik<>"" && $icerik<>"") { 
		
		if ($baglanti->query("UPDATE makale SET baslik = '$baslik', icerik = '$icerik' WHERE id =".$_GET['id'])) // Veri güncelleme sorgumuzu yazıyoruz.
		{
			header("location:ekle.php"); 
		}
		else
		{
			echo "Hata oluştu"; 
		}

	}

}

?>

</body>
</html>