<!-- 
<h1>Detail Penerbit</h1>
<dl>
  <dt>Nama Peberbit</dt>
  <dd><?= $nama ?></dd>

  <dt>Alamat</dt>
  <dd><?= $alamat ?></dd>

  <dt>Telpon</dt>
  <dd><?= $telpon ?></dd>

  <dt>Email</dt>
  <dd><?= $email ?></dd>
  <dt>Email</dt>
  <dd><?= $email ?></dd>
  <dt>Email</dt>
  <dd><?= $email ?></dd>
</dl>

<a href='#' onclick="history.back()">Back</a> -->

<?php
include APPPATH . 'views/fragment/header.php'; 
include APPPATH . 'views/fragment/menu.php' ;
?>
<div class="card col-sm-8 container d-flex align-items-center justify-content-center">
<img src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS . 
'uploads/'.$gambar?>" class="card-img-top" alt="<?= $judul ?>">
<div class="card-body">
<h5 class="card-title"><?= $judul ?></h5>
<p class="card-text"><?= $sinopsis ?>
<dl>
<dt>ISBN</dt>
<dd><?= $isbn ?></dd>
<dt>Pengarang</dt>
<dd><?= $pengarang ?></dd>
<dt>Tanggal Rilis</dt>
<dd><?= date_format(date_create($tanggal_rilis),"d/m/Y") ?></dd>
<dt>Jumlah Halaman</dt>
<dd><?= $jumlah_halaman ?></dd>
<dt>Penerbit</dt>
<dd><?= $nama_penerbit ?></dd>
</dl>
</div>
</div>
<a href='#' onclick="history.back()">Back</a>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>
