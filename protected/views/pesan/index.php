<?php
/* @var $this PesanController */

$this->breadcrumbs=array(
	'Pesan',
);
?>
<h1>Pesan</h1>
<div class="form">

<form id="peminjaman-ruangan-form" action="/BO3/index.php?r=peminjamanRuangan/create" method="post">
	<p class="note">Fields with <span class="required">*</span> are required.</p>


	
		<label for="PeminjamanRuangan_waktu_pinjam" class="required">Subjek <span class="required">*</span></label>		<input size="20" maxlength="20" name="PeminjamanRuangan[waktu_pinjam]" id="PeminjamanRuangan_waktu_pinjam" type="text" />			</div>

	<div class="row">
	<br>
		<label for="PeminjamanRuangan_keperluan_tambahan"><b>Isi pesan</b></label>
		<br><textarea rows="6" cols="50" name="PeminjamanRuangan[keperluan_tambahan]" id="PeminjamanRuangan_keperluan_tambahan"></textarea>			</div>

	<div class="row buttons">
		<input type="submit" value="Send" />	</div>

</form>
</div>

