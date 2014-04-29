<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ddmenu.css" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/ddmenu.js" type="text/javascript"></script>

	<title>Sistem Informasi Pelayanan Teknologi Informasi</title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		        <div id="gambar">
                    <a href ="#"><img src ="images/cs.png" width = "128" height ="128"
                                              alt = "logo "></a>
                                              </div>
                <div id="judul">
                    Sistem Informasi Pelayanan Teknologi Informasi <br>
                    <h6>Fakultas Ilmu Komputer Universitas Indonesia</h6>
                </div>
	</div>
	
	<nav id="ddmenu">
		<ul>			
			<?php if (Yii::app()->user->isGuest) { ?>
				<li><a href="/alay/index.php?r=site/login">Login</a></li>

				//menu bar di bawah ini akan keluar setelah login dilakukan
			<?php } elseif (!Yii::app()->user->isGuest) { ?>

				<li class="active"><a href="/BO3/index.php?r=site/index">Home</a></li>
			<li>Service
				<div>
	                <div class="column">
	                 <a href="/alay/index.php?r=fasilitasMahasiswa/create"><span>Fasilitas Mahasiswa</span></a>
					 <a href="/alay/index.php?r=pendaftaranDNS/create"><span>Pendaftaran DNS</span></a>
					 <a href="/alay/index.php?r=peminjamanRuangan/create"><span>Peminjaman Ruangan</span></a>
					 <a href="/alay/index.php?r=serverPenelitian/create"><span>Server Penelitian</span></a>
	                </div>
            	</div>
            </li>
            <li><a href="/alay/index.php?r=site/page&amp;view=about">History Request</a></li>
				<li><a href="/alay/index.php?r=site/logout"><?php echo 'Logout ('.Yii::app()->user->name.')' ?></a></li>
			<?php } ?> 
			<li><a href="/alay/index.php?r=site/contact">Contact</a></li>
		</ul>
	</nav>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->


<?php if (!Yii::app()->user->isGuest) { ?>




	<div id="sidebar1" class="sidebar">
			<ul>
				<li>
					<h2>Profile</h2>
					<ul>
						<li><a href="#"><img src ="images/people.png" width = "125" height ="125"
                                              alt = "logo "></a></li>
						<li><b><?php echo ''.Yii::app()->user->name.'' ?></b></li>
						<li><b>NPM</b></li>
						<li><a href="/alay/index.php?r=pesan/index"><b>Pesan</b></a></li>
						<li><a href="#"><a href="/alay/index.php?r=site/logout"><b><?php echo 'Logout' ?></b></a></a></li>
						
					</ul>
				</li>
				<li>
					<h2>Services</h2>
					<ul>
						<li><a href="/alay/index.php?r=fasilitasMahasiswa/create"><span><b>Fasilitas Mahasiswa</b></span></a>
					 	<li><a href="/alay/index.php?r=pendaftaranDNS/create"><span><b>Pendaftaran DNS</b></span></a>
					 	<li><a href="/alay/index.php?r=peminjamanRuangan/create"><span><b>Peminjaman Ruangan</b></span></a>
					 	<li><a href="/alay/index.php?r=serverPenelitian/create"><span><b>Server Penelitian</b></span></a>
					</ul>
				</li>
			</ul>
		</div>


			<?php   }   ?>


	
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by alay.<br/>
		PROPENSI - B.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
