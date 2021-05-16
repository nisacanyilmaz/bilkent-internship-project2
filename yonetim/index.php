<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>oturum aç</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
<div class=" container" style="margin-top:200px; ">
  <div class ="jumbotron ">
    <center><h2><b>Kullanıcı Girişi</b></h2>
	<form action="login.php" method="POST">
		<table align="center">
			<tr>
			<td>Kullanıcı Adı </td>
			<td>:</td>
			<td><input type="text" name="kullanici"></td>
			</tr><br>
			<tr>
			<td>Parola </td>
			<td>:</td>
			<td><input type="password" name="sifre"></td>
			</tr>
			<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Giris"></td>
			</tr>
		</table>
	</form>
	</div>
</div>

</body>
<html>