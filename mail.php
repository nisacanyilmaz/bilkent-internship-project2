<?php
	$adsoyad	= strip_tags($_POST['adsoyad']); 
	$eposta 	= strip_tags($_POST['eposta']); 
	$konu		= strip_tags($_POST['konu']); 
	$mesaj		= strip_tags($_POST['mesaj']); 
	
	if(isset($adsoyad) && isset($eposta) && isset($konu) && isset($mesaj)) {
		if(empty($adsoyad) || empty($eposta) || empty($konu) || empty($mesaj)) {
		  echo 'Doldurulması gereken alanları lütfen doldurun';
		}
		else {
			
			$headers  = 'MIME-Version: 1.0' . "rn";
			$headers .= 'Content-type: text/html; charset=utf-8' . "rn"; 
			$headers .= 'To: Alıcı Adı <alici@mail.com>' . "rn";
			$headers .= 'From: Yollayan <yollayan@mail.com>' . "rn";
			$headers .= 'Reply-To: Yanit <yanit@mail.com>' . "rn";
			$headers .= 'X-Mailer: PHP/' . phpversion() . "rn";
			$headers .= 'Cc: bilgialicisi@mail.com' . "rn";
			$headers .= 'Bcc: gizlialici@mail.com' . "rn";
			
			
			$icerik = '<table>
				<tr>
					<td>Ad Soyad:</td>
					<td>'.$adsoyad.'</td>
				</tr>
				<tr>
					<td>E-Posta:</td>
					<td>'.$eposta.'</td>
				</tr>
				<tr>
					<td>Konu:</td>
					<td>'.$konu.'</td>
				</tr>
				<tr>
					<td>Mesaj:</td>
					<td>'.$mesaj.'</td>
				</tr>
			</table>';
			
			$gonderilen = 'alici@mail.com';
			mail($gonderilen, $konu, $icerik, $headers);
		}
	}	
?>