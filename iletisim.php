<?php include "includes/header.php";?>

    <div id="page-wrapper">
	    <h3><b>İLETİŞİM</b></h3>
        <div class="container-fluid">
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                   
				<form action="mail.php" method="post">
					<table>
						<tr>
							<td style="width:90px;">Ad Soyad</td>
							<td><input type="text" name="adsoyad" style="width:200px;height:30px;" /></td>
						</tr>
						<tr>
							<td>E-Posta</td>
							<td><input type="text" name="eposta" style="width:200px;height:30px;" /></td>
						</tr>
						<tr>
							<td>Konu</td>
							<td><input type="text" name="konu" style="width:200px;height:30px;" /></td>
						</tr>
						<tr>
							<td>Mesaj</td>
							<td><textarea name="mesaj" style="width:200px;height:80px;"></textarea></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Gönder" style="margin-top:15px; width:100%; height:30px; " />
							</td>
						</tr>
					</table>
				</form>
                </div>
				<div class="col-sm-12 col-md-12 well" id="content">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.9831788410834!2d32.74632268704091!3d39.874614693036364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347124abb0591%3A0x5ff5bbe4f3812e54!2sBilkent+%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1563881771625!5m2!1str!2str" width="1250" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
            </div>
        </div>
    </div>
<?php include "includes/footer.php"; ?>	
