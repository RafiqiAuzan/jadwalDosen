  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Kelas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title']; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url; ?>/kelas/updateKelas" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="kelas_id" value="<?= $data['kelas']['kelas_id']; ?>">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Kelas</label>
              <input type="text" class="form-control" name="nama_kelas" value="<?= $data['kelas']['nama_kelas']; ?>">
            </div>
            <div class="form-group">
              <label>Prodi</label>
              <select class="form-control" name="prodi_id">
                <option value="">Pilih</option>
                <?php foreach ($data['prodi'] as $row) : ?>
                  <option value="<?= $row['prodi_id']; ?>" <?php if ($data['kelas']['prodi_id'] == $row['prodi_id']) {
                                                              echo "selected";
                                                            } ?>><?= $row['nama_prodi']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>Semester</label>
              <select class="form-control" name="semester">
                <option value="I" <?php if ($data['kelas']['semester'] == 'I') { ?> selected="selected" <?php } ?>>I</option>
                <option value="II" <?php if ($data['kelas']['semester'] == 'II') { ?> selected="selected" <?php } ?>>II</option>
                <option value="III" <?php if ($data['kelas']['semester'] == 'III') { ?> selected="selected" <?php } ?>>III</option>
                <option value="IV" <?php if ($data['kelas']['semester'] == 'IV') { ?> selected="selected" <?php } ?>>IV</option>
                <option value="V" <?php if ($data['kelas']['semester'] == 'V') { ?> selected="selected" <?php } ?>>V</option>
                <option value="VI" <?php if ($data['kelas']['semester'] == 'VI') { ?> selected="selected" <?php } ?>>VI</option>
                <option value="VII <?php if ($data['kelas']['semester'] == 'VII') { ?> selected=" selected" <?php } ?>">VII</option>
                <option value="VIII" <?php if ($data['kelas']['semester'] == 'VIII') { ?> selected="selected" <?php } ?>>VIII</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tahun Akademik</label>
              <input type="text" class="form-control" name="tahun_akademik" value="<?= $data['kelas']['tahun_akademik']; ?>">
            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->