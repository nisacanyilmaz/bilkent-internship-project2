<?php 

include("ayar.php");
ob_start();
session_start();

if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
    echo "<center>sayfamiza hosgeldiniz"."<br>";
	echo "<a href=logout.php>cikis</a></center>";
}
ob_end_flush();
?>

<?php include("yonetimheader.php"); ?>

<div class="container" style="margin-top:100px;">
<div class="col-md-6">
<form action="" method="post">
	<table class="table" border="2px">
		<tr>
			<td>Hakkımda</td>
			<td><input type="text" name="hakkimda" class="form-control" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
		</tr>
	</table>
</form>


<?php 
if ($_POST) { 
	$hakkimda = $_POST['hakkimda']; 
	$insert = $db->prepare("insert into metinler set hakkimda=?");
	$ok =  $insert->execute(array($hakkimda));  
	if($ok){   
		echo '<h2>eklendi</h2>';   
	}else {
		echo '<h2>hata olustu</h2>';	   
	}
}
?>
</div>

<div class="col-md-7">
<table class="table" border="1px">
	
	<tr>
		<th>Hakkımda</th>
		<th></th>
		<th></th>
	</tr>

<?php 
$sorgu=$db->query("SELECT * FROM metinler", PDO::FETCH_ASSOC);
$sorgu->execute();

while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)){ 

$id = $sonuc['id']; 
$hakkimda = $sonuc['hakkimda'];
?>
	<tr>
		<td><?php echo $id;  ?></td>
		<td><?php echo $hakkimda; ?></td>
		<td><a href="guncelle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
	</tr>

<?php }  ?>
</table>
</div>
</div>
</body>
</html>