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

      <div class="card">
        <div class="card-body text-center">
          <h1 style="padding-top: 10px; font-family: Arial;font-size: 22px;">Selamat Datang! Ini adalah aplikasi
            pengaduan
            Masyarakat Tekotok
            berbasis Web</h1>
        </div>
      </div>



      <div class="row">

        <div class="col">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="<?= base_url('assets/img/kantor.png') ?>" alt="Dist Photo 1">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h5 class="card-title text-primary text-white">Card Title</h5>
                    <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                      sed do eiusmod tempor.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="<?= base_url('assets/img/kantor2.png') ?>" alt="Dist Photo 2">
                  <div class="card-img-overlay d-flex flex-column justify-content-center">
                    <h5 class="card-title text-white mt-5 pt-2">Card Title</h5>
                    <p class="card-text pb-2 pt-1 text-white">
                      Lorem ipsum dolor sit amet, <br>
                      consectetur adipisicing elit <br>
                      sed do eiusmod tempor.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 ">
                  <img class="card-img-top" src="<?= base_url('assets/img/kantor3.png') ?>" alt="Dist Photo 2">
                  <div class="card-img-overlay  d-flex flex-column justify-content-center">
                    <h5 class="card-title text-white mt-5 pt-2 ">Card Title</h5>
                    <p class="card-text pb-2 pt-1 text-white ">
                      Lorem ipsum dolor sit amet, <br>
                      consectetur adipisicing elit <br>
                      sed do eiusmod tempor.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">

              <!-- general form elements disabled -->
              <?= $this->session->flashdata('message'); ?>
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Form Pengaduan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form action="<?= base_url('masyarakat/pengaduan') ?>" enctype="multipart/form-data" method="post">
                    <div class="row">
                      <div class="col-lg">
                        <!-- text input -->
                        <div class="form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Bukti foto</label>
                            <?= form_error('foto', '<small class="text-danger pl-3" >', '</small>') ?>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose photo</label>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg">
                        <!-- textarea -->
                        <!-- <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" class="form-control" rows="3" placeholder="Tekotok RT99/99, Tekotok, Tekotok"></input>
                      </div> -->
                        <div class="form-group">
                          <label>Keterangan</label>
                          <?= form_error('isi_pengaduan', '<small class="text-danger pl-3" >', '</small>') ?>
                          <textarea name="isi_pengaduan" class="form-control" rows="3"
                            placeholder="Tulis disini ..."></textarea>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->
            <div class="col-md">
              <?php if ($user) { ?>
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Riwayat Pengaduan</h3>

                    <div class="card-tools">
                      <span title="3 New Messages" class="badge badge-danger">3</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                      </button>
                      <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button> -->
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display: block;">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages hei">
                      <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left">Dinas Perhutanan</span>
                          <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?= base_url('assets/') ?>img/perhutanan.png"
                          alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Terimakasih telah mempercayakan kepada kami. Kami akan menindak lanjuti!
                        </div>
                        <div class="status d-flex flex-column align-items-center">
                          <span class="mt-3 badge badge-warning">ditanggapi</span>
                          <img id="animasi" src="<?= base_url('assets/') ?>img/sort-down-solid.svg" width="20px">
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->


                      <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left">Dinas Perhutanan</span>
                          <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?= base_url('assets/') ?>img/perhutanan.png"
                          alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Kami sudah memproses untuk memperbaiki. Silahkan menunggu hingga perbaikan tersebut selesai,
                          Terimakasih.
                        </div>

                        <div class="status d-flex flex-column align-items-center">
                          <span class="mt-3 badge badge-warning">diproses</span>
                          <img id="load" class="mt-3" src="<?= base_url('assets/') ?>img/load.png" width="20px">
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->

                      <!-- Message. Default to the left -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-left">Dinas Perhutanan</span>
                          <span class="direct-chat-timestamp float-right">25 Jan 7:14 pm</span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="<?= base_url('assets/') ?>img/perhutanan.png"
                          alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Proses perbaikan sudah selesai. Terimakasih, jika ada keluhan silahkan adukan kepada kami
                          kembali!
                        </div>

                        <div class="status d-flex flex-column align-items-center">
                          <span class="mt-3 badge badge-success">selesai</span>
                          <img id="hai" class="mt-3" src="<?= base_url('assets/') ?>img/check.png" width="20px">
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->


                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                      <ul class="contacts-list">
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="<?= base_url('assets/') ?>img/transportasipng.png"
                              alt="User Avatar">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Dinas Perhubungan
                                <small class="contacts-list-date float-right">2/28/2015</small>
                              </span>
                              <span class="contacts-list-msg">How have you been? I was...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="<?= base_url('assets/') ?>img/pembangunan.png"
                              alt="User Avatar">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Dinas Pembangunan
                                <small class="contacts-list-date float-right">2/23/2015</small>
                              </span>
                              <span class="contacts-list-msg">I will be waiting for...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="<?= base_url('assets/') ?>img/desa.png" alt="User Avatar">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Kementrian Desa
                                <small class="contacts-list-date float-right">2/20/2015</small>
                              </span>
                              <span class="contacts-list-msg">I'll call you back at...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Nora S. Vans
                                <small class="contacts-list-date float-right">2/10/2015</small>
                              </span>
                              <span class="contacts-list-msg">Where is your new...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                John K.
                                <small class="contacts-list-date float-right">1/27/2015</small>
                              </span>
                              <span class="contacts-list-msg">Can I take a look at...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Kenneth M.
                                <small class="contacts-list-date float-right">1/4/2015</small>
                              </span>
                              <span class="contacts-list-msg">Never mind I found...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                      </ul>
                      <!-- /.contacts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card-footer-->
              </div>

            <?php } else {
              } ?>
          </div>
        </div>






  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->