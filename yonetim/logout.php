<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cikis</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
<?php
session_start();
ob_start();
session_destroy();
echo "<div align='center' class='alert alert-danger' role='alert'>Çıkış gerçekleştirildi! Anasayfaya yönlendiriliyorsunuz.</div>";
header("Refresh: 1.5; url=../index.php");
ob_end_flush();
?>
</body>
</html>