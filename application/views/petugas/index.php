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
              <h3>
                <?= $jmlpengaduan; ?>
              </h3>

              <p>Jumlah aduan</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-bag"></i> -->
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>
                <?= $selesai; ?>
              </h3>

              <p>Jumlah aduan sudah selesai</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>
                <?= $proses; ?>
              </h3>

              <p>Jumlah aduan diproses</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-person-add"></i> -->
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>
                <?= $disposisi; ?>
              </h3>

              <p>Jumlah aduan disposisi</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-pie-graph"></i> -->
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

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
                        <?php if ($d['status'] == 'disposisi') {
                          echo '<td><span class="badge bg-danger">Disposisi</span></td>';
                        } else if ($d['status'] == 'proses') {
                          echo '<td><span class="badge bg-warning ">Proses</span></td>';
                        } else if ($d['status'] == 'selesai') {
                          // echo ' <td><a name="" id="" class="btn btn-success" href="#" role="button">Lihat</a></td>';
                          echo '<td><span class="badge bg-success ">Selesai</span></td>';
                        } ?>



                        <?php

                        $button($d['status'], $d['id_pengaduan'])
                          // $button = '<td><button type="button" value=';
                          // $btnTanggapan = ' data-toggle="modal" class="btn btn-warning modalTanggapanBtn">Beri Tanggapan</button></td>';
                          // $btnLihat = ' data-toggle="modal" class="btn btn-primary modalLihatBtn">Lihat</button></td>';
                          // // $btnTanggapan = ' data-toggle="modal" class="btn btn-warning modalTanggapanBtn">Beri Tanggapan</button></td>';
                          // if ($d['status'] == 'disposisi') {
                          //   echo $button . $d['id_pengaduan'] . $btnTanggapan;
                          // } else if ($d['status'] == 'proses') {
                          //   echo $button . $d['id_pengaduan'] . $btnLihat;
                          // } else if ($d['status'] == 'selesai') {
                          //   echo $button . $d['id_pengaduan'] . $btnLihat;
                          // }
                      
                          ?>
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

          </div>
        </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->