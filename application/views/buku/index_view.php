<div class="container">

  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url('Buku/tambah')  ?>" class="btn btn-primary"> Tambah Data</a>
    </div>
  </div>
    <div class="row mt-3">
    <!-- mt = margin top -->
      <div class="col-md-6">
        <h1>Data Buku</h1>

        <form action="" method="get">
        <div class="input-group mb-3">

          <input type="text" class="form-control" placeholder="Masukkan pencarian..." name="keyword">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
          </div>
        </div>
      </form>


        <?php
        if ($this->session->flashdata('sukses') ==TRUE) {?>
          <div class="alert alert-succerss alert-dismissible fade show" role="alert">
            Data buku <strong>Berhasil</strong> <?= $this->session->flashdata('sukses');  ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div><?php

        }
        ?>

        <ul class="list-group">
          <?php
          foreach ($buku as $row) {?>
            <li class="list-group-item"> <?= $row['judul']?>
            <a href="<?= base_url('Buku/edit/').$row['id_buku'] ?>" class="badge badge-info float-right">Edit</a>
            <a href="<?= base_url('Buku/hapus/').$row['id_buku'] ?>" class="badge badge-danger float-right">Hapus</a>
            <a href="<?= base_url('Buku/detail/').$row['id_buku'] ?>" class="badge badge-secondary float-right">Detail</a>

            </li>
          <?php }
          ?>
        </ul>
      </div>
    </div>
</div>
