<!DOCTYPE html>
</html>
<head>
<meta charset = "utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
<?php 

include("ayar.php");
ob_start();
session_start();

$kullanici = $_POST['kullanici'];
$sifre = $_POST['sifre'];

$sql_check = $db->prepare( "select * from uyeler where username='".$kullanici."' and pass='".$sifre."'");
$sql_check->execute(array($kullanici,$sifre));

if($sql_check->rowCount()>0)  {
    $_SESSION["login"] = "true";
    $_SESSION["username"] = $kullanici;
    $_SESSION["pass"] = $sifre;
    header("Location:yonetimpaneli.php");
}
else {
	echo "<div align='center' class='alert alert-danger' role='alert'>Kullanıcı adı veya şifre yanlış! Lütfen tekrar deneyiniz.</div>";
    
    header("Refresh:1; url=index.php");
}

ob_end_flush();
?>

</body>
</html>