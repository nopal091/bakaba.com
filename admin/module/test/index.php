<div id="content-wrapper">

  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php?page=module/test/index">Data test</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>
    <h1>Data test</h1>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">

        <i class="fas fa-table"></i>
        Data Table test</div>
      <div class="card-body">
        <a href="index.php?page=module/test/tambah" class="btn btn-primary" style="float: right">Tambah Data</a> <br><br>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $no = 1;
              $ambil = $koneksi->query("SELECT * FROM tb_test");
              //$pecah = $ambil->fetch_array(); //menggunalkan [''] utk panggila data
              //$pecah = $ambil->fetch_assoc(); //menggunalkan [''] utk panggila data
              //$pecah = $ambil->fetch_object(); //menggunakan -> utk panggil data
              while ($pecah = $ambil->fetch_object()) {
                //var_dump($pecah);
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pecah->nama ?></td>
                  <td>
                    <a href="index.php?page=module/test/edit&id= <?php echo $pecah->id ?>" class="btn btn-warning">Edit</a>
                    <a href="index.php?page=module/test/hapus&id= <?php echo $pecah->id ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>
  <!-- /.container-fluid -->

  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © Bakaba.com</span>
      </div>
    </div>
  </footer>

</div>