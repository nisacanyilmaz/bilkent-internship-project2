<?php 
include("yonetimheader.php"); 
?>

<div class="container" style="margin-top:100px;">
<div class="col-md-6">
<form action="" method="post">
	<table class="table" border="2px">
		<tr>
			<td>Kategori</td>
			<td><input type="text" name="baslik" class="form-control" ></td>
		</tr>
		    <td></td>
			<td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
	</table>
</form>

<?php 
if ($_POST) { 
	$baslik = $_POST['baslik']; 
	$insert = $db->prepare("insert into kategoriler set kategori_adi=?");	  
	$ok =  $insert->execute(array($baslik)); 	 
	if($ok){
	    echo '<h2>kategori basarıyla eklendi</h2>';
	}else {
		echo '<h2>kategori eklenirken bir hata olustu</h2>';}
}

?>
</div>

<div class="col-md-7">
<table class="table" border="1px">	
	<tr>
		<th>Numara</th>
		<th>Kategori</th>
	</tr>

<?php 
$sorgu=$db->query("SELECT * FROM kategoriler", PDO::FETCH_ASSOC);
$sorgu->execute();

while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)){ 

$id = $sonuc['kategori_id']; 
$baslik = $sonuc['kategori_adi'];
$ustid=$sonuc['kategori_ustid'];

?>	
	<tr>
		<td><?php echo $id;  ?></td>
		<td><?php echo $baslik; ?></td>
	
	</tr>
<?php }  ?>

</table>
</div>
</div>
</body>
</html>