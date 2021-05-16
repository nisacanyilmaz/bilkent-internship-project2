<?php include("yonetimheader.php");?>

<div class="container" style="margin-top:100px;">
<div class="col-md-6">
<?php              
	function kategori($id=0) {
					  
		global $db; 
		$query = $db->prepare("select * from kategoriler where kategori_ustid=? order by kategori_id desc"); 
		$query->execute(array($id));
		$goster = $query->fetchAll(PDO::FETCH_ASSOC); 
		$x = $query->rowCount();  
					  
		if($x){
			echo '<ul>';
				foreach($goster as $row) {
					echo '<li><a href="?do=kategori&link='.$row["kategori_adi"].'">';
					echo $row["kategori_adi"];
					echo '</a>';		 
					kategori($row["kategori_id"]);							 
					echo '</li>';
				} 		 
			 echo '</ul>';  
		}else {
						  
			return false; 
		}  
	}		  
	kategori();
?>
</div>
<?php 
	$do = @$_GET["do"];
		switch($do){
			case "kategori":
			include("kategori.php");
			break;
			 
			case "konu_ekle":
			include("konu_ekle.php");
			break; 
		}
?>
</div>
</div>
</body>
</html>
