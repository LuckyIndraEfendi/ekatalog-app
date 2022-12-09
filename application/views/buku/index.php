<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List Penerbit</h1>
<div class="d-flex justify-content-end">
<a class="btn btn-success btn-sm" href="<?= base_url("buku/form")?>">Tambah</a>
</div>
<!--  -->
<table class="table table-striped"> 
    <tr>
        <th>No</th>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tanggal Rilis</th>
        <th>Jumlah Halaman</th>
        <th>Sinopsis</th>
        <th>ID Penerbit</th>
        <th>Gambar</th>
        <th>Tersedia</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['isbn'] ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['pengarang'] ?></td>
            <td><?= $data['tanggal_rilis'] ?></td>
            <td><?= $data['jumlah_halaman'] ?></td>
            <td><?= $data['sinopsis'] ?></td>
            <td><?= $data['id_penerbit'] ?></td>
            <td><img src="<?php echo base_url('assets/uploads/' . $data["gambar"]); ?>" width="200"></td>
            <td><?= $data['tersedia'] ?></td>
            <td>
            <div class="btn-group">
<a class="btn btn-primary btn-sm" href="<?=
base_url("buku/detail/{$data['id']}")?>">Detail</a>
<a class="btn btn-warning btn-sm" href="<?= base_url("buku/form/{$data['id']}")?>">Edit</a>
<a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?=
base_url("buku/hapus/{$data['id']}")?>">Hapus</a>
</div>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>


<!-- <a class="btn btn-warning btn-sm" href="<?= base_url("buku/detail/{$data['id']}")?>">Detail</a>
                <a class="btn btn-primary btn-sm" href="<?= base_url("buku/form/{$data['id']}")?>">Edit</a>
                <a onclick="return confirm('menghapus data?')" class="btn btn-danger btn-sm" href="<?= base_url("penerbit/hapus/{$data['id']}")?>">Hapus</a> -->