<!doctype html>
<html>
<head>
<link rel="SHORTCUT ICON" href="assets/images/logo.png">
<?php include('ayarlar.php');
$sayfa = @$_GET['sayfa'];

?>

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ERN DESİGN</title>
	
	<meta name="language" content="turkish, TR" />
	
	
	<link rel="stylesheet" href="assets/styles/reset.css" type="text/css" />
	<link rel="stylesheet" href="assets/styles/custom.css" type="text/css" />
	<link rel="stylesheet" href="assets/font/font.css" type="text/css" />

	
	<link rel="stylesheet" href="assets/styles/font-awesome.css" type="text/css" />

	
	<link rel="stylesheet" href="assets/mobile/media-queries.css" type="text/css" />

	

	
	<link rel="Shortcut Icon" href="assets/images/icons/fav_icon.png" type="image/x-icon">
    
    <!-- Scripts -->
	<script type="text/javascript" src="assets/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="assets/scripts/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/scripts/custom.js"></script>


    <!-- Add jQuery assetsrary -->
	<script type="text/javascript" src="assets/scripts/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="assets/scripts/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="assets/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="assets/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="assets/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="assets/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="assets/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 * resim açma
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>

	

</head>
<body>

<!-- top_bg -->
<div class="top_bg">
	<!-- ortala -->
	<div class="ortala">
		<!-- logo -->
		<a href="index.php" class="logo">
			<img src="assets/images/logo.png" width="250" height="100" alt="../" />
		</a><!-- logo -->

		<!-- top_menu -->
		<div class="top_menu">
			<ul>
				<li><a href="indirim.php"> Kampanyalar</a></li>
				<li><span>|</span></li>
				<?php
                if(isset($_SESSION['fkisim'])){
				echo '
				<li> <a href="islem.php?sayfa=cikis-yap">'.$_SESSION['fkisim'].' Çıkış Yap</a></li>
				';
				}else{
				echo '<li><a href="giris.php">Giriş</a></li>';
				}
				?>
                
				
                <li><span>|</span></li>
				<li><a href="iletisim.php">İletişim</a></li>
			</ul>
		</div><!-- top_menu -->

		<!-- social_box -->
		<div class="social_box">
			<ul>
				<li>						   <a href="https://www.facebook.com/"><img src="assets/images/fb.png" width="34" height="34" alt="../" /></a></li>
				<li>						   <a href="https://twitter.com/"><img src="assets/images/tw.png" width="34" height="34" alt="../" /></a></li>
				<li style="margin-right: 0px;"><a href="https://plus.google.com/"><img src="assets/images/gm.png" width="34" height="34" alt="../" /></a></li>
			</ul>
		</div><!-- social_box -->

		<div class="clear"></div>

		<!-- menu -->
		<div class="menu">
			<ul>
				<li>
                 <a href="index.php">ANASAYFA</a>
                 </li>
				<li><a href="index.php?sayfa=urunler&urun=tul-perde">TÜL PERDE</a></li>
			
				<li> <a href="index.php?sayfa=urunler&urun=kanat-perde">KANAT PERDE</a></li>
				
				<li><a href="index.php?sayfa=urunler&urun=stor-perde">STOR PERDE</a></li>
                <li><a href="index.php?sayfa=urunler&urun=aksesuar">AKSESUAR</a></li>
                <li><a href="index.php?sayfa=urunler&urun=kampanya">KAMPANYA</a></li>
                <li><a href="index.php?sayfa=urunler&urun=iletisim">İLETİŞİM</a></li>              
			</ul>
			<a href="iletisim.php" class="menu_contact_bg">
				<h6>Bize Ulaşın</h6>
				<h1>0 368 555 55 55</h1>
			</a>
		</div><!-- menu -->
		<div class="menu_shadow"></div>
	</div><!-- ortala -->
</div><!-- top_bg -->


<?php	
	if($sayfa == "ana-sayfa"){
		include('anasayfa.php');
	}else if($sayfa == "urunler"){
		include('urunler.php');
		
	}else if($sayfa == "iletisim"){
		include('iletisim.php');
	}else{
		include('anasayfa.php');		
	}
	
	
?>


<!-- ============ include / footer.html ============ -->
<!-- footer_bg -->
<div class="footer_bg">
	<!-- ortala -->
	<div class="ortala">
		<div class="footer">
			
			<a href=""><b>ERNDESİGN</b></a>
		</div>
	</div><!-- ortala -->
</div><!-- footer_bg -->

</body>
</html>