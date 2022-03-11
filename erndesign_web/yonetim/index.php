<?php
include('../ayarlar.php');	

if(@$_SESSION['admin'] == md5('admin_giris_yapti') ){
include('yonetim.php');
}else{
	include('giris.php');
}
?>