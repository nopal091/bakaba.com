<div id="content-wrapper">

    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php?page=module/test/index">Data test</a>
            </li>
            <li class="breadcrumb-item active">Tambah test</li>
        </ol>
        <h1>Tambah Data test</h1>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Tambah Data test</div>
            <div class="card-body col-md-6">
                <a href="index.php?page=module/test/index" class="btn btn-primary" style="float: left">Kembali</a> <br><br>
                <form method="POST">

                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" class="form-control" name="namatest" autofocus="autofocus">
                            <label>Nama test</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" name="simpan">Simpan</button>
                    <button class="btn btn-warning" value="reset">Reset</button>
                </form>
                <?php
                if (isset($_POST['simpan'])) {
                    $namatest = $_POST['namatest'];

                    $simpan = $koneksi->query("INSERT INTO tb_test (nama) VALUES ('$namatest')");

                    if ($simpan) {
                        echo "<script>alert('Data Disimpan');
                    window.location='index.php?page=module/test/index';
                    </script>";
                    } else {
                        echo "<script>alert('Data Tidak Disimpan');
                    window.location='index.php?page=module/test/index';
                    </script>";
                    }
                }

                ?>
            </div>

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