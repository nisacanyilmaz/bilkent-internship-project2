<?php 

if ($_GET) 
{

include("../ayar.php"); 

if ($baglanti->query("DELETE FROM makale WHERE id =".(int)$_GET['id'])) // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
{
	header("location:ekle.php"); // 
}
}
?>