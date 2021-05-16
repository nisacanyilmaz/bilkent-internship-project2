<?php include "includes/header.php";?>


    <div id="page-wrapper">
        <div class="container-fluid">
		<h2><b>SAYFAMA HOŞGELDİNİZ</b></h2>
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <p>
			  <?php 
	              
				  function kategori($id=0) {
					  
					  global $db;
					  
					  $query = $db->prepare("select * from kategoriler where kategori_ustid=? order by kategori_id desc"); //prepare ile dışarıdan gelen veri sorgumuza dahil edildi.
					  $query->execute(array($id));
					  $goster = $query->fetchAll(PDO::FETCH_ASSOC); //sorguya uygun kayıtların listesi alınmıştır.
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
	 
	    if (isset($_GET["do"]) && $_GET["do"] == "kategori")
		include("yonetim/kategori.php");
	?>
					<br>
					
					
                </div>
				 
            </div>
        </div>
    </div>
    
<?php include "includes/footer.php"; ?>