<!DOCTYPE html>
<html>
<head>
<?php
include("yonetim/ayar.php");
?>
<meta charset = "utf-8">
<title>Anasayfa</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
}



@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}


@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 0px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #222;
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }
    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }
}


</style>


</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
			    <div align="center"><img width="150" height="150" src="insan.jpg" alt="insan"></div>
			    <li>
					<h2><p class="text-danger">KİŞİSEL SAYFA</p></h2>
			    </li>
                <li>
                    <a href="index.php" > ANASAYFA </a>
                    
                </li>
				<li>
                    <a href="deneme.php">Kategoriler</a>
                </li>
                <li>
                    <a href="hakkimda.php">HAKKIMDA</a>
                    
                </li>
                <li>
                    <a href="iletisim.php">İLETİŞİM</a>
                </li>
				 <li>
                    <a href="yonetim">YÖNETİM PANELİ</a>
                </li>
            </ul>
        </div>
    </nav>