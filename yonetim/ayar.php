<?php 


  try {
	
        $db = new PDO("mysql:host=localhost;dbname=bitirme1;charset=utf8","root","");	
	  
    }catch(PDOException $mesaj){
	  
	  die($mesaj->getmessage());
	  
	  
    }


?>