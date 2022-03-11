
<html>
    <head>
    	<meta charset="utf-8">
    </head>
<body>

<?php
include('../ayarlar.php');	

$sayfa = @$_GET['sayfa'];
if($sayfa == 'giris-yap'){
	$k = @$_POST['kullanici-adi'];
	$s = @$_POST['sifre'];
	
	$sorgu = $db->query('SELECT * FROM yoneticiler WHERE kadi="'.$k.'" AND sifre="'.md5($s).'"');
	if($sorgu->num_rows == "0"){
		echo '<p>Böyle Bir Yönetici Hesabı Bulunamadı. <a href="index.php">Ana Sayfaya Git</a></p>';	
	}else{		
		$sorgu = $sorgu->fetch_assoc();		
		$_SESSION['admin'] = md5('admin_giris_yapti');
		$_SESSION['adi'] = $sorgu['adi'];		
		echo '<p>Başarıyla Giriş Yaptınız. <a href="index.php">Yönetim Sayfasına Git</a></p>';	
	}
}

if($sayfa == 'cikis-yap'){
	session_destroy();
	echo '<p>Başarıyla Çıkış Yaptınız. <a href="index.php">Ana Sayfaya Git</a></p>';
}

if(@$_SESSION['admin'] != md5('admin_giris_yapti') ){
	die('Bu sayfaya etişim yetkiniz yoktur.');
}

if($sayfa == 'yonetici-ekle'){
	$db->query('INSERT INTO yoneticiler (adi, kadi, sifre) VALUES ("'.$_POST['adi'].'","'.$_POST['kadi'].'","'.md5($_POST['sifre']).'")');
	echo '<p>Yönetici Hesabı Eklendi. <a href="javascript:history.back(1)">Geri Git</a></p>';	
}

if($sayfa == 'yonetici-duzenle'){
	if($_POST['sifre'] == 'password'){
		$db->query('UPDATE yoneticiler SET adi="'.$_POST['adi'].'", kadi="'.$_POST['kadi'].'" WHERE id='.$_GET['id']);
	}else{
		$db->query('UPDATE yoneticiler SET adi="'.$_POST['adi'].'", kadi="'.$_POST['kadi'].'", sifre="'.md5($_POST['sifre']).'" WHERE id='.$_GET['id']);
	}
	
	echo '<p>Yönetici Hesabı Düzenlendi. <a href="javascript:history.back(1)">Geri Git</a></p>';	
}

if($sayfa == 'yonetici-sil'){	
		$db->query('DELETE FROM yoneticiler WHERE id='.$_GET['id']);
		echo '<p>Yönetici Hesabı Silindi. <a href="javascript:history.back(1)">Geri Git</a></p>';
	
}





if($sayfa == 'kullanici-ekle'){
	$db->query('INSERT INTO kullanicilar (adi, kadi, sifre) VALUES ("'.$_POST['adi'].'","'.$_POST['kadi'].'","'.md5($_POST['sifre']).'")');
	echo '<p>Kullanıcı Hesabı Eklendi. <a href="javascript:history.back(1)">Geri Git</a></p>';	
}

if($sayfa == 'kullanici-duzenle'){
	if($_POST['sifre'] == 'password'){
		$db->query('UPDATE kullanicilar SET adi="'.$_POST['adi'].'", kadi="'.$_POST['kadi'].'" WHERE id='.$_GET['id']);
	}else{
		$db->query('UPDATE kullanicilar SET adi="'.$_POST['adi'].'", kadi="'.$_POST['kadi'].'", sifre="'.md5($_POST['sifre']).'" WHERE id='.$_GET['id']);
	}
	
	echo '<p>Kullanıcı Hesabı Düzenlendi. <a href="javascript:history.back(1)">Geri Git</a></p>';	
}

if($sayfa == 'kullanici-sil'){	
		$db->query('DELETE FROM kullanicilar WHERE id='.$_GET['id']);
		echo '<p>Kullanıcı Hesabı Silindi. <a href="javascript:history.back(1)">Geri Git</a></p>';
	
}


if($sayfa == 'urun-ekle'){
	if($_FILES['resim']['name'] ==''){
		$db->query('INSERT INTO urunler (urunadi, fiyati, kategorisi) VALUES ("'.$_POST['urunadi'].'","'.$_POST['fiyati'].'","'.$_POST['kategorisi'].'")');
		echo '<p>Ürün Başarıyla Yüklendi. <a href="index.php?sayfa=urun-yonetimi">Ürünlere Git</a></p>';
	}else{
		$type= explode('/',$_FILES['resim']['type']);	
		if($type[0]=='image'){
			
			$path = "C:/wamp64/www/odev/odev/images/";
			$yeni = 'image'.time();
			$path = $path.$yeni.'.'.$type[1];
			if(move_uploaded_file($_FILES['resim']['tmp_name'], $path)) {		 
			 $db->query('INSERT INTO urunler (urunadi, fiyati, kategorisi, resmi) VALUES ("'.$_POST['urunadi'].'","'.$_POST['fiyati'].'","'.$_POST['kategorisi'].'", "'.$yeni.'.'.$type[1].'")');
			 echo '<p>Ürün Başarıyla Yüklendi. <a href="index.php?sayfa=urun-yonetimi">Ürünlere Git</a></p>';
			} else{
				echo "Dosya Yüklenemedi.";
			}		
			
		}else{
			echo '<p>Yüklemeye çalıştığınız dosya bir resim dosyası değildir. <a href="javascript:history.back(1)">Geri Git</a></p>';
		}
	}
}




if($sayfa == 'urun-duzenle'){
	if($_FILES['resim']['name'] ==''){
		$db->query('UPDATE urunler SET urunadi="'.$_POST['urunadi'].'", fiyati="'.$_POST['fiyati'].'", kategorisi="'.$_POST['kategorisi'].'" WHERE id='.$_GET['id']);
		echo '<p>Ürün Başarıyla Güncellendi. <a href="index.php?sayfa=urun-yonetimi">Ürünlere Git</a></p>';
	}else{
		$type= explode('/',$_FILES['resim']['type']);	
		if($type[0]=='image'){
			
			$path = "C:/wamp64/www/odev/odev/images/";
			$yeni = 'image'.time();
			$path = $path.$yeni.'.'.$type[1];
			if(move_uploaded_file($_FILES['resim']['tmp_name'], $path)) {		 
			 $db->query('UPDATE urunler SET urunadi="'.$_POST['urunadi'].'", fiyati="'.$_POST['fiyati'].'", kategorisi="'.$_POST['kategorisi'].'", resmi="'.$yeni.'.'.$type[1].'" WHERE id='.$_GET['id']);
			 echo '<p>Ürün Başarıyla Güncellendi. <a href="index.php?sayfa=urun-yonetimi">Ürünlere Git</a></p>';
			} else{
				echo "Dosya Yüklenemedi.";
			}		
			
		}else{
			echo '<p>Yüklemeye çalıştığınız dosya bir resim dosyası değildir. <a href="javascript:history.back(1)">Geri Git</a></p>';
		}
	}
}

if($sayfa == 'urun-sil'){	
		$db->query('DELETE FROM urunler WHERE id='.$_GET['id']);
		echo '<p>Ürün Silindi. <a href="javascript:history.back(1)">Geri Git</a></p>';
	
}
?>


</body>
</html>