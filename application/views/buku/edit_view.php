<div class="container">
<div class="row mt-3">
  <div class="col-md-6">
      <div class="card">
        <h5 class="card-header">Form Edit Data</h5>
        <div class="card-body">
          <form class="" action="" method="post">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" name="judul" id="judul" value="<?= $buku['judul'] ?>">
              <small id="" class="form-text text-danger"> <?= form_error('judul')?></small>
            </div>

            <div class="form-group">
              <label for="judul">Penulis</label>
              <input type="text" class="form-control" name="penulis" id="penulis" value="<?= $buku['penulis'] ?>">
              <small id="" class="form-text text-danger"> <?= form_error('penulis')?></small>
            </div>

            <div class="form-group">
              <label for="judul">Tahun Terbit</label>
              <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>">
              <small id="" class="form-text text-danger"> <?= form_error('tahun_terbit')?></small>
            </div>

            <div class="form-group">
              <label for="judul">Harga</label>
              <input type="text" class="form-control" name="harga" id="harga" value="<?= $buku['harga'] ?>">
              <small id="" class="form-text text-danger"> <?= form_error('harga')?></small>
            </div>

            <div class="form-group">
              <label for="id_genre">Genre</label>
              <select class="form-control" name="id_genre" id="id_genre">
                <?php
                foreach ($genre as $g) {?>
                  <option  <?php if($buku['id_genre'] == $g['id_genre']) {echo "selected";} ?> value="<?= $g['id_genre'] ?>"> <?= $g['genre'] ?> </option>
                <?php
                }
                 ?>
              </select>
            </div>
            <br>

            <button type="submit" name="button"  class="btn btn-primary float-right">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Edit Data</h1>

    <br>
    <table>
      <form class="" action="<?php echo base_url('Buku/edit_proses'); ?>" method="post">
        <tr>
          <input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">
        </tr>
        <tr>
          <td><label> Judul </label>
          <td>:</td>
          <td><input type="text" name="judul" value="<?= $buku['judul']  ?>"> </td>
        </tr>
        <tr>
          <td> <label>Penulis </label>
          <td>:</td>
          <td><input type="text" name="penulis" value="<?= $buku['penulis'] ?>"> </td>
        </tr>
        <tr>
          <td><label>Tahun Terbit </label></td>
          <td>:</td>
          <td><input type="text" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>"> </td>
        </tr>
        <tr>
          <td> <label>Harga </label>
          <td>:</td>
          <td><input type="text" name="harga" value="<?= $buku['harga'] ?>"> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button type="submit" name="simpan">Simpan</button></td>
        </tr>

    </table>

  </body>
</html> -->
