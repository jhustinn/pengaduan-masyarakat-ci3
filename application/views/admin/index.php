<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="<?= base_url('assets/') ?>img/1.png" width="140px">
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
            <!-- <li class="breadcrumb-item active">Fixed Footer </li> -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Jumlah aduan</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>50<sup style="font-size: 20px"></sup></h3>

              <p>Jumlah aduan sudah diproses</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>35</h3>

              <p>Jumlah aduan ditinjau</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Jumlah aduan ditolak</p>
            </div>
            <div class="icon">

              <!-- <i class="ion ion-pie-graph"></i> -->
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <!-- <div class="row"> -->
        <div class="col">

          <!-- Tabel Daftar Aduan -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Aduan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow-x: auto;">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Isi aduan</th>
                    <th>Bukti</th>
                    <th>Alamat</th>
                    <!-- <th>Komentar</th> -->
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Foreach -->
                  <?php $i = 1; ?>
                  <?php foreach ($pengaduan as $d): ?>
                    <tr>
                      <td>
                        <?= $i . '.'; ?>
                      </td>
                      <td>
                        <?= $d['nama'] ?>
                      </td>
                      <td>
                        <?= $d['nik'] ?>
                      </td>
                      <td>
                        <?= $d['isi_pengaduan'] ?>
                      </td>
                      <td><img class="card-img-top" src="<?= base_url('assets/img/bukti_foto/') . $d['foto'] ?>"
                          alt="Bukti Foto">
                      </td>
                      <td>
                        <?= $d['alamat'] . ", " . $d['kecamatan'] . ", " . $d['kelurahan'] ?>
                      </td>
                      <!-- <td><?php if (!$d['komentar']) {
                        echo "Belum Dikomentari!";
                      } ?></td> -->
                      <td><span class="badge bg-danger ">
                          <?= $d['status'] ?>
                        </span></td>
                      <td><span class="badge bg-primary">Lihat</span></td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-header d-flex">
              <h3 class="card-title">Daftar Petugas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="dtHorizontalExample" class="table table-bordered" style="overflow-x: auto;">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>No Telp</th>
                    <th>Username</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Foreach -->
                  <?php $i = 1; ?>
                  <?php foreach ($petugas as $p): ?>
                    <tr>
                      <td>
                        <?= $i . '.'; ?>
                      </td>
                      <td>
                        <?= $p['nama'] ?>
                      </td>
                      <td>
                        <?= $p['telp'] ?>
                        <!-- <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div> -->
                      </td>
                      <td>
                        <?= $p['username'] ?>
                      </td>
                      <td><span class="badge bg-danger ">Offline</span></td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                  <!-- End Foreach -->
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah
                Petugas</button>

              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->