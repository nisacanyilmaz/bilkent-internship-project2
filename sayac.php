<?php include("ayarla.php"); ?>
<?php
function sayac(){
    global $db;
    $ip = $_SERVER['REMOTE_ADDR']; //$_SERVER parametrenin değerini web sunucusundan çeker.REMOTE_ADDR ise geçerli sayfayı görüntüleyen kullanıcının IP adresidir.
    $tarih = time(); //Şu anki zaman bilgisini unixtime formatında döndürdük. unixtime ise geçen saniye sayısına denilen sayısal veri tipidir.
    $zamanasimi = time()-86400;
    mysql_query("Delete From ip_tablom where zaman < ".$zamanasimi); //1 günlük zamanaşımına uğrayan ip'leri sildik
    
    $sonuc = mysql_query("Select Count(ip) From ip_tablom where ip='$ip'"); //Tablodaki kayıt sayısını almak için count kullandık. NULL içeren veriyi dikkate almadı.
    $sayi = mysql_result($sonuc,0);
    
        if($sayi ==0){
            mysql_query("Insert Into ip_tablom (ip, zaman) Values ('$ip', '$tarih')");
            mysql_query("Update sayac_tablom Set tekil_hit=(tekil_hit+1), cogul_hit=(cogul_hit+1) where id=1"); //1 kere girildiyse güncelledi
        }else{
            mysql_query("Update sayac_tablom Set cogul_hit=(cogul_hit+1) where id=1");//sayfa yenilendiyse güncelledi
        }
    
    $sonuc2 = mysql_query("Select tekil_hit, cogul_hit From sayac_tablom where id=1");
    $satir = mysql_fetch_array($sonuc2);
    echo 'Toplam Tekil Hit: <strong>'.$satir['tekil_hit'].'</strong><br>';
    echo 'Toplam Çoğul Hit: <strong>'.$satir['cogul_hit'].'</strong><br>';
}
?>
<?php sayac(); ?>