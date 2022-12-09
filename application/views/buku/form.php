<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('buku/save') ?>" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div >
    <label></label>
    <div>
    <h3>Tambah/Ubah Buku</h3>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">Nama Buku</label>
    <div>
        <input class="form-control" type="text" name="isbn" id="isbn" value="<?= $isbn ?>" required/>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">ISBN</label>
    <div>
        <input class="form-control" type="text" name="isbn" id="isbn" value="<?= $isbn ?>" required/>
    </div>
</div>
<div class="row mb-3">
    <label class="form-label">Judul</label>
    <div>
        <input class="form-control" type="text" name="judul" id="judul" value="<?= $judul ?>" required/>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">Pengarang</label>
    <div>
        <input class="form-control" type="text" name="pengarang" id="pengarang" value="<?= $pengarang ?>" required/>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">Tanggal Rilis</label>
    <div>
        <input class="form-control" type="date" name="tanggal_rilis" id="tanggal_rilis" value="<?= $tanggal_rilis ?>" required/>
    </div>
</div>
<div class="row mb-3">
    <label class="form-label">Jumlah Halaman</label>
    <div>
        <input class="form-control" type="text" name="jumlah_halaman" id="jumlah_halaman" value="<?= $jumlah_halaman ?>" required/>
    </div>
</div>
<div class="row mb-3">
    <label class="form-label">Sinopsis</label>
    <div>
        <input class="form-control" type="text" name="sinopsis" id="sinopsis" value="<?= $sinopsis ?>" required/>
    </div>
</div>
<div class="row mb-3"> 
    <label class="form-label">ID Penerbit</label>
    <div>
        <input class="form-control" type="text" name="id_penerbit" id="id_penerbit" value="<?= $id_penerbit ?>" required/>
    </div>
</div>
<div>
    <label class="form-label">Gambar</label>
    <input class="form-control" type="file" name="gambar" id="gambar" accept="image/*" onchange="loadFile(event)"/>
    <img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/'.$gambar ?>" 
    height="120" width="120"/>
</div>

<div class="row mb-3">
    <label class="form-label">Tersedia</label>
    <div>
        <input class="form-control" type="text" name="tersedia" id="tersedia" value="<?= $tersedia ?>" required/>
    </div>
</div>

<div>
    <input class="btn btn-danger btn-sm" type="button" value="Cancel" onclick="history.back()" />
    <input class="btn btn-info btn-sm" type="submit" value="Simpan" />
</div>

</form>

<script>
var loadFile = function(event) {
	var image = document.getElementById('preview');
	image.src = URL.createObjectURL(event.target.files[0]);
}

</script>