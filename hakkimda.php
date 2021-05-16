<?php include "includes/header.php";?>

    <div id="page-wrapper">
        <div class="container-fluid">
		<h2><b>Hakkımda</b></h2>
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <?php
					$sorgu=$db->query("SELECT * FROM metinler where id=1", PDO::FETCH_ASSOC);
					$sorgu->execute();
					
						while($kayit = $sorgu->fetch(PDO::FETCH_ASSOC)) {
							echo  $kayit['hakkimda']."<br>";
							  
						}
					
					?>
                </div>
            </div>
        </div>
    </div>
    
<?php include "includes/footer.php"; ?>