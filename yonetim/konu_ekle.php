<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<?php 

   if($_POST){
	   
	   $baslik = $_POST["baslik"];
	   $aciklama = $_POST["aciklama"];
	   $kategori = $_POST["kategori"];
	   
	   $insert = $db->prepare("insert into konular set 
	   
	   
	               konu_baslik=?,
				   konu_aciklama=?,
				   konu_kategori=?
	   
	   ");
	   
	   $ok =  $insert->execute(array($baslik,$aciklama,$kategori)); 
	   
	   
	   if($ok){
		   
		   echo '<h2>konu basarıyla eklendi</h2>';
		   
	    }else {
		   
		   echo '<h2>konu eklerken bir hata olustu</h2>';
		   
	    }
	   
   }else {
	     
		 
		    function kat($id=0,$string=0) {
					  
					  global $db;
					  
					  $query = $db->prepare("select * from kategoriler where kategori_ustid=? order by kategori_id desc");
					  $query->execute(array($id));
					  $goster = $query->fetchAll(PDO::FETCH_ASSOC);
					  $x = $query->rowCount();  
					  
					  if($x){

						 foreach($goster as $row) {
							 echo '<option value="'.$row["kategori_id"].'">';
							 echo str_repeat("-",$string).$row["kategori_adi"];
							 
							 kat($row["kategori_id"],$string + 5);
							 
							 echo '</option>';
						} 
						 
						 
						  
					    }else {
						  
						  return false;
						  
					    }
					  
					  
			}
		 
		 
	   ?>
	   <form action="" method="post">
	   <table cellpadding="5" cellspacing="5"> 
       <tr> 
	   <td>Başlık</td>
	   </tr>
	   <tr> 
	   <td><input type="text" name="baslik" /></td>
	   </tr>
	   <tr> 
	   <td> 
	   <select name="kategori"> 
	   
	   <?php kat();?>
	   
	   </select>
	   </td>
	   </tr>
        <tr> 
		<td>Açıklama</td>
		</tr>
		<tr> 
		<td><textarea name="aciklama" class="ckeditor" id="" cols="60" rows="10"></textarea></td>
		</tr>
		<tr> 
		<td><input type="submit" value="Yazı Ekle" /></td>
		</tr>
	   </table>
	   </form>
	   <?php
	   
   }


?>
</body>
</html>