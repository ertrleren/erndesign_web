<?php
if(@$_SESSION['admin'] != md5('admin_giris_yapti') ){
	die('Bu sayfaya etişim yetkiniz yoktur.');
}

?>
<h1>Yeni Kullanıcı Ekle</h1>
<hr />
<table>
	<tr>
		<td>Adı Soyadı</td>
        <td>Kullanıcı Adı</td>
        <td>Şifre</td>
        <td>İşlem</td>
	</tr>
    
    <tr>
    	<form action="islem.php?sayfa=kullanici-ekle" method="post">
    	<td><input type="text" name="adi"></td>
        <td><input type="text" name="kadi" ></td>
        <td><input type="password" name="sifre"></td>
        <td><button>Ekle</button></td>
        </form>
    </tr>
</table>
<h1>Kullanıcıları Düzenle</h1>
<hr />
<table>
	<tr>
		<td>Adı Soyadı</td>
        <td>Kullanıcı Adı</td>
        <td>Şifre</td>
        <td>İşlem</td>
        <td>Sil</td>
	</tr>
    
    <?php
    $sorgu = $db->query('SELECT * FROM kullanicilar');
	while($r = $sorgu->fetch_assoc()){
	echo '
	<tr>
    	<form action="islem.php?sayfa=kullanici-duzenle&id='.$r['id'].'" method="post">
    	<td><input type="text" name="adi" value="'.$r['adi'].'" ></td>
        <td><input type="text" name="kadi"  value="'.$r['kadi'].'"></td>
        <td><input type="password" name="sifre" value="password" autocomplete="off"></td>
        <td><button>Düzenle</button></td>
        <td><a href="islem.php?sayfa=kullanici-sil&id='.$r['id'].'" class="sil">Sil</a></td>
        </form>
    </tr>
	';
	}
	?>
    
</table>
