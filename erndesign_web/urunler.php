<?php
$sorgu = $db->query('SELECT * FROM urunler WHERE kategorisi="'.$_GET['urun'].'"');
$kategori = array('tul-perde' => 'Tül Perde', 'kanat-perde' => 'Kanat Perde', 'stor-perde' => 'Stor Perde', 'aksesuar' => 'Aksesuar', 'kampanya' => 'Kampanya');
?>
<!-- red_bg -->
<div class="red_bg" style="height: 120px;">
	<!-- ortala -->
	<div class="ortala">
		<!-- hakkimiz -->
		<div class="hakkimiz">
			<h6><B><?php echo $kategori[$_GET['urun']]?></B></h6>
		</div><!-- hakkimiz -->
	</div><!-- ortala -->
</div><!-- red_bg -->

<!-- ortala -->
<div class="ortala">
	<!-- u_generic -->
	<div class="u_generic">
	<?php 
    while($r = $sorgu->fetch_assoc()){
  		echo '
		<div class="u1_box">
			<a class="fancybox" href="images/'.$r['resmi'].'" data-fancybox-group="gallery" title="Ürünler">
				<img src="images/'.$r['resmi'].'" width="234" height="234" alt="" />
			</a>
			<span class="urunadi">'.$r['urunadi'].'</span>
			<span class="fiyati">'.$r['fiyati'].' TL</span>
			<div class="cizgi"></div>
		</div>
		';
    }
    ?>
		

		
	</div><!-- u_generic -->

	<div class="clear"></div>
</div><!-- ortala -->