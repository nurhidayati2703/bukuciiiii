<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <h5 class="card-header">Detail Data Buku</h5>
        <div class="card-body">
          <h5 class="card-title"><?= $buku['judul']; ?></h5>
          <p class="card-text"> <?= $buku['genre']; ?></p>
          <p class="card-text"> <?= $buku['penulis'];  ?></p>
          <p class="card-text"> <?= $buku['tahun_terbit']; ?></p>
          <p class="card-text">Rp<?= $buku['harga'];  ?></p>

          <a href="<?= base_url('Buku/index') ?>" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
