<?php 
include("ayar.php"); 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hakkımda</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

<?php 

$guncelle = $db->prepare("SELECT * FROM metinler WHERE id =".(int)$_GET['id']); 
$guncelle->execute();
?>

<div class="container">
<div class="col-md-6">

<form action="" method="post">
	
	<table class="table">
		
		<tr>
			<td>Hakkımda</td>
			<td><textarea name="hakkimda" class="ckeditor"></textarea></td>
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
	
	    $hakkimda = $_POST['hakkimda']; 

		$guncelle=$db->prepare("UPDATE metinler SET hakkimda = '$hakkimda' WHERE id =".$_GET['id']);
		$ok=$guncelle->execute(array($hakkimda));
		if($ok)
		{
			header("location:yonetimpaneli.php"); 
		}
		else
		{
			echo "Hata oluştu"; 
		}



}

?>

</body>
</html>