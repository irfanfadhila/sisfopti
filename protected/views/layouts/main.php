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
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/ddmenu.js" type="text/javascript"></script>

	<title><?php echo Yii::app()->name; ?></title>
	<?php $user=Yii::app()->user; ?>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		        <div id="gambar">
                    <a href ="#"><img src ="<?php echo Yii::app()->request->baseUrl; ?>/images/cs.png" width = "128" height ="128" alt = "logo "></a>
               	</div>
                <div id="judul">
                    Sistem Informasi Pelayanan Teknologi Informasi <br>
                    <h6>Fakultas Ilmu Komputer Universitas Indonesia</h6>
                </div>
	</div>
	
	<nav>
		<ul>			
			<?php if (Yii::app()->user->isGuest) { ?>
				<?php $this->widget('application.extensions.mbmenu.MbMenu', array(
                    'items'=>array(
                        array('label'=>'Login', 'url'=>array('login/index'))
                    )
                )); ?>
			<?php } elseif (!Yii::app()->user->isGuest) { ?>
				<?php $this->widget('application.extensions.mbmenu.MbMenu',array( 
                   	'items'=>array( 
                       	array('label'=>'Home', 'url'=>array('/site/index')), 
                        array('label'=>'Service', 
                            'items'=>array( 
                                array('label'=>'Fasilitas Mahasiswa', 'url'=>array('/fasilitasMahasiswa/create')), 
                                array('label'=>'Pendaftaran DNS', 'url'=>array('/pendaftaranDns/create')),
                                array('label'=>'Peminjaman Ruangan', 'url'=>array('/peminjamanRuangan/create')),
                                array('label'=>'Server Penelitian', 'url'=>array('/serverPenelitian/create')),
                            ), 
                        ), 
                        array('label'=>'History Request', 'url'=>array('/historyRequest/index')),
                        array('label'=>'List Request', 'url'=>array('/listRequest/index'), 'visible'=>$user->checkAccess(2)),
                        array('label'=>'List Request', 'url'=>array('/listRequest/index'), 'visible'=>$user->checkAccess(3)),
                        array('label'=>'List Request', 'url'=>array('/listRequest/index'), 'visible'=>$user->checkAccess(4)),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/login/logout')),
                    ), 
            	)); ?>
			<?php } ?>
		</ul>
	</nav>

	<?php if (!Yii::app()->user->isGuest) { ?>
		<div id="sidebar1" class="sidebar">
			<ul>
				<li>
					<h2>Profile</h2>
					<ul>
						<li><a href="#"><img src ="<?php echo Yii::app()->request->baseUrl; ?>/images/people.png" width = "125" height ="125" alt = "logo "></a></li>
						<li><b><?php echo ''.Yii::app()->user->name.'' ?></b></li>
						<li><b>NPM</b></li>
						<li><a href="/B03_Iterasi1/index.php/pesan/index"><b>Pesan</b></a></li>
						<li><a href="#"><a href="/B03_Iterasi1/index.php/login/logout"><b><?php echo 'Logout' ?></b></a></a></li>
						
					</ul>
				</li>
				<li>
					<h2>Services</h2>
					<ul>
						<li><a href="/B03_Iterasi1/index.php/fasilitasMahasiswa/create"><span><b>Fasilitas Mahasiswa</b></span></a>
					 	<li><a href="/B03_Iterasi1/index.php/pendaftaranDNS/create"><span><b>Pendaftaran DNS</b></span></a>
					 	<li><a href="/B03_Iterasi1/index.php/peminjamanRuangan/create"><span><b>Peminjaman Ruangan</b></span></a>
					 	<li><a href="/B03_Iterasi1/index.php/serverPenelitian/create"><span><b>Server Penelitian</b></span></a>
					</ul>
				</li>
			</ul>
		</div>
	<?php   }   ?>

	<div style="float:left; width:70%;">
		<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	</div>

	<?php endif?>

	<div> <?php echo $content; ?> </div>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by alay.<br/>
		PROPENSI - B.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
