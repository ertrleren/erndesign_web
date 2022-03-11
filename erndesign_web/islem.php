<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>İşlemler</title>
        <meta charset="utf-8">
    </head>
    <body>
 		<?php
			include('ayarlar.php');			
			$sayfa = @$_GET['sayfa'];
			
			if($sayfa == 'kayit-ol'){
				$fkisim = $_POST['fkisim'];
				$fkadi = $_POST['fkadi'];
				$fsifre = $_POST['fsifre'];				
				
				if($fkisim == ""){
					echo '<p>Lütfen isim soyisim boş bırakmayınız. <a href="giris.php">Geri Dön</a></p>';
					echo ' </body></html>';
					die();
				}
				
				if($fkadi == ""){
					echo '<p>Lütfen kullanıcı adını boş bırakmayınız. <a href="giris.php">Geri Dön</a></p>';
					echo ' </body></html>';
					die();
				}
				
				if($fsifre == ""){
					echo '<p>Lütfen şifre alanını boş bırakmayınız. <a href="giris.php">Geri Dön</a></p>';
					echo ' </body></html>';
					die();
				}
				
				
				$sorgu =$db->query('SELECT * FROM kullanicilar WHERE kadi="'.$fkadi.'" AND sifre="'.md5($fsifre).'"');
				
				if($sorgu->num_rows == 0){
					$kayit = $db->query('INSERT INTO kullanicilar (adi, kadi, sifre) VALUES ("'.$fkisim.'","'.$fkadi.'","'.md5($fsifre).'")');
					$_SESSION['fkisim'] = $fkisim;
					echo '<p>Başarıyla Kayıt oldunuz. <a href="index.php">Ana Sayfaya Git</a></p>';
				}else{
					echo '<p>Bu bilgilerle zaten kayıt olmuş bir kullanıcı bulunmaktadır. <a href="giris.php">Geri Dön</a></p>';
					echo ' </body></html>';
					die();
				}
				
				
			}elseif($sayfa == 'giris-yap'){
				$fkadi = $_POST['fkadi'];
				$fsifre = $_POST['fsifre'];	
				
				if($fkadi == ""){
					echo '<p>Lütfen kullanıcı adını boş bırakmayınız. <a href="giris.php">Geri Dön</a></p>';
					echo ' </body></html>';
					die();
				}
				
				if($fsifre == ""){
					echo '<p>Lütfenşifre alanını boş bırakmayınız. <a href="giris.php">Geri Dön</a></p>';
					echo ' </body></html>';
					die();
				}
				
				
				$sorgu =$db->query('SELECT * FROM kullanicilar WHERE kadi="'.$fkadi.'" AND sifre="'.md5($fsifre).'"');
				if($sorgu->num_rows == 0){
					
					echo '<p>Bu bilgilere sahip kullanıcı bulunamadı. <a href="giris.php">Geri Dön</a></p>';
				}else{
					$sorgu = $sorgu->fetch_assoc();	
					$_SESSION['fkisim'] = $sorgu['adi'];
					echo '<p>Başarıyla Giriş Yaptınız. <a href="index.php">Ana Sayfaya Git</a></p>';	
				}
				
			}elseif($sayfa == 'cikis-yap'){
				echo '<p>Başarıyla Çıkış Yaptınız. <a href="index.php">Ana Sayfaya Git</a></p>';	
				unset($_SESSION['fkisim']);
			}
		?>
    </body>
</html>

