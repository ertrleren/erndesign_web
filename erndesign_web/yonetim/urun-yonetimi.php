<?php
if(@$_SESSION['admin'] != md5('admin_giris_yapti') ){
	die('Bu sayfaya etişim yetkiniz yoktur.');
}

?>
<h1>Yeni Ürün Ekle</h1>
<hr />
<table>
	<tr>
		<td>Ürün Resmi</td>
        <td>Kategori</td>
        <td>Ürün Adı</td>
        <td>Fiyatı</td>
	</tr>
    
    <tr>
    	<form action="islem.php?sayfa=urun-ekle" method="post" enctype="multipart/form-data">
    	<td><input type="file" name="resim"></td>
        <td>
        	<select name="kategorisi" id="">            	
        		<option value="tul-perde">Tül Perde</option>
                <option value="kanat-perde">Kanat Perde</option>
                <option value="stor-perde">Stor Perde</option>
                <option value="aksesuar">Aksesuar</option>
                <option value="kampanya">Kampanya</option>
        	</select>
        </td>
        <td><input type="text" name="urunadi" ></td>
        <td><input type="text" name="fiyati" ></td> 
        
        <td><button>Ekle</button></td>
        </form>
    </tr>
</table>
<h1>Ürünleri Düzenle</h1>
<hr />
<table>
	<tr>
    <td></td>
		<td>Ürün Resmi</td>
        <td>Kategori</td>
        <td>Ürün Adı</td>
        <td>Fiyatı</td>
	</tr>
    
    <?php
    $sorgu = $db->query('SELECT * FROM urunler');
	while($r = $sorgu->fetch_assoc()){
		$kategori = array('tul-perde' => 'Tül Perde', 'kanat-perde' => 'Kanat Perde', 'stor-perde' => 'Stor Perde', 'aksesuar' => 'Aksesuar', 'kampanya' => 'Kampanya');
	echo '
	<tr>
    	<form action="islem.php?sayfa=urun-duzenle&id='.$r['id'].'" method="post" enctype="multipart/form-data">
		<td><img src="../images/'.$r['resmi'].'" alt="" width="100"></td>
    	<td><input type="file" name="resim"></td>
        <td>
        	<select name="kategorisi" id="">  
			    <option value="'.$r['kategorisi'].'">'.$kategori[$r['kategorisi']].'</option>      	
        		<option value="tul-perde">Tül Perde</option>
                <option value="kanat-perde">Kanat Perde</option>
                <option value="stor-perde">Stor Perde</option>
                <option value="aksesuar">Aksesuar</option>
                <option value="kampanya">Kampanya</option>
        	</select>
        </td>
        <td><input type="text" name="urunadi" value="'.$r['urunadi'].'"></td>
        <td><input type="text" name="fiyati" value="'.$r['fiyati'].'"></td> 
        
        <td><button>Düzenle</button></td>
		<td><a href="islem.php?sayfa=urun-sil&id='.$r['id'].'" class="sil">Sil</a></td>
        </form>
    </tr>
	';
	}
	?>
    
</table>
