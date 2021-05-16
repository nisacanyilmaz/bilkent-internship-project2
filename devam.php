<?php include "includes/header.php";?>


    <div id="page-wrapper">
        <div class="container-fluid">
		<h2><b>SAYFAMA HOŞGELDİNİZ</b></h2>
            <div class="row" id="main" >
                
				 <div class="col-sm-12 col-md-12 well" id="content">
				 <?php
					if(($_GET['konu_id'])){
					$query= $db->query("select * from konular where konu_id=".$_GET['konu_id'],PDO::FETCH_ASSOC);
					$query->execute();
						
							while($kayit = $query->fetch(PDO::FETCH_ASSOC)) {
								$yazi= "<h2>".$kayit['konu_baslik']."</h2>"."<br>".$kayit ['konu_aciklama'];
								echo $yazi;
							}
						
					}
					
					?>
					<br>
					<a href="index.php">GERİ</a>
                </div>
            </div>
        </div>
    </div>
    



<?php include "includes/footer.php"; ?>


