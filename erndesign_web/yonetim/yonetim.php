<?php
if(@$_SESSION['admin'] != md5('admin_giris_yapti') ){
	die('Bu sayfaya etişim yetkiniz yoktur.');
}

$sayfa = @$_GET['sayfa'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Yönetim Paneli</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<center>
<table>
<tr>
	<td width="200" valign="top">
    	<ul class="linkler">
	        <li><a href="index.php?sayfa=yonetici-hesaplari">Yöneticileri Yönet</a></li>
    		<li><a href="index.php?sayfa=kullanici-hesaplari">Müşterileri Yönet</a></li>
            <li><a href="index.php?sayfa=urun-yonetimi">Ürünleri Yönet</a></li>
            <li><a href="islem.php?sayfa=cikis-yap">Çıkış Yap</a></li>
    	</ul>
    </td>
    <td width="25"></td>
	<td class="govde">
    	
        	<?php
            if($sayfa == 'yonetici-hesaplari'){
				include('yonetici-hesaplari.php');
			}elseif($sayfa == 'kullanici-hesaplari'){
				include('kullanici-hesaplari.php');
			}elseif($sayfa == 'urun-yonetimi'){
				include('urun-yonetimi.php');
			}else{
				echo 'Hos Geldiniz Sayın '.$_SESSION['adi'].' Yapmak istediğiniz işlemi lütfen sol taraftan seçiniz...';
			}
			?>
        
    </td>   
</tr>
</table>
</center>
</body>
</html>