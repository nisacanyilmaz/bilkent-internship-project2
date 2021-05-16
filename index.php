<?php include "includes/header.php";?>


    <div id="page-wrapper">
        <div class="container-fluid">
		<h2><b>SAYFAMA HOŞGELDİNİZ</b></h2>
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <p>
					<?php
					$sorgu=$db->query("SELECT * FROM konular", PDO::FETCH_ASSOC);
					$sorgu->execute();				
						while($row=$sorgu->fetch(PDO::FETCH_ASSOC)) {
							$yazi="<h2>".$row["konu_baslik"]."</h2>"."<br> ".$row["konu_aciklama"];
							//echo $sonuc;
							echo substr($yazi,0,50).' <a name="devam" href ="devam.php?konu_id='.$row['konu_id'].'" type="submit">Devamını Oku</a>';
						}									
					$db=null;
					?>
					<br>								
                </div>
				<div class="col-sm-12 col-md-12 well" id="content">
				    <?php include("sayac.php"); ?>
				</div>	
            </div>
        </div>
    </div>
    
<?php include "includes/footer.php"; ?>