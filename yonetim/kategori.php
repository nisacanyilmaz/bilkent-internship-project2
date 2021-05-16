<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php 

  $link=$_GET["link"];
  
  
  $query=$db->prepare("select * from konular inner join kategoriler on  kategoriler.kategori_id = konular.konu_kategori where kategori_adi=?");
   
   $query->execute(array($link));
   $goster=$query->fetchAll(PDO::FETCH_ASSOC);
   $x=$query->rowCount();  
   
   
   
    $q = $db->prepare("select * from konular inner join kategoriler on  kategoriler.kategori_id = konular.konu_kategori where kategori_adi=?");
   
   $q->execute(array($link));
   $liste=$q->fetch(PDO::FETCH_ASSOC);
   $kontrol=$q->rowCount();
   
   
       
	   if($x){
		   
		  ?>

	  <h3><?php echo $liste["kategori_adi"];?> 'den/dan
	  &nbsp; <?php echo $kontrol;?> adet yazi var </h3>

	  </div>
		   
<?php		  
		   
		  foreach($goster as $row){
			  
			  ?>
			
			  <div class="kategori"> 
			  <h2><?php echo $row["konu_baslik"];?></h2>
			  <span> kategori :  <?php echo $row["kategori_adi"];?> </span>
			  <p> 
			  <?php echo $row["konu_aciklama"]?>
			  </p>
			  </div>
			  <?php
			  
			  
		  } 
		   
	   }else {
		   
		   echo '<h2>Bu kategoriye ait hic yazi bulunmuyor</h2>';
		   
	   }
	   
 ?>
 </body>
 </html>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   