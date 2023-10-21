<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy;
    <?= date('Y') ?> <a href="https://adminlte.io">@ashura</a>.
  </strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Modal Tambah Petugas -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/tambahPetugas') ?>" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama">
              <?= form_error('nama', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Username</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Username" name="username">
              <?= form_error('username', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password1">
              <?= form_error('password1', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Repeat Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password2">
              <?= form_error('pasword2', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">No Telp</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="" name="telp">
            <?= form_error('telp', '<small class="text-danger pl-3" >', '</small>') ?>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Beri Tanggapan -->
<div class="modal fade modalTanggapan" id="modalTanggapan" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tanggapan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('petugas/tambahTanggapan') . $pengaduan['id_pengaduan']; ?>" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama">
              <?= form_error('nama', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Username</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Username" name="username">
              <?= form_error('username', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password1">
              <?= form_error('password1', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Status</label>
              <Select class="form-control">
                <option value="">
                </option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
                <option value="tolak">Tolak</option>
              </Select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">No Telp</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="" name="telp">
            <?= form_error('telp', '<small class="text-danger pl-3" >', '</small>') ?>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Lihat -->
<div class="modal fade modalTanggapan" id="modalTanggapan" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tanggapan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('petugas/tambahTanggapan') . $pengaduan['id_pengaduan'] ?>" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama">
              <?= form_error('nama', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Username</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Username" name="username">
              <?= form_error('username', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password1">
              <?= form_error('password1', '<small class="text-danger pl-3" >', '</small>') ?>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Status</label>
              <Select class="form-control">
                <option value="">
                </option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
                <option value="tolak">Tolak</option>
              </Select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">No Telp</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="" name="telp">
            <?= form_error('telp', '<small class="text-danger pl-3" >', '</small>') ?>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Login Modal -->
<div id="loginModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Anda Belum Login!</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Silahkan login terlebih dahulu!</p>
        <a href="<?= base_url('auth'); ?>" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
</div>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<?php

// $login = $this->session->userdata('username');

// var_dump($login);
// die;

?>

</head>



<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/') ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>js/adminlte.js"></script>
<script src="<?= base_url('assets/') ?>js/adminlte.min.js"></script>
<script src="<?= base_url('assets/') ?>js/pages/dashboard.js"></script>
<script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>
<script>
  // Login Modal Trigger
  const login = document.getElementById('info').innerHTML;
  console.log(login);

  if (login == '\n          User        ') {
    $(document).ready(setTimeout(function () {
      $("#loginModal").modal('show');
    }, 1500));
  }



  // Tanggapan Modal
  $(document).on("click", ".modalTanggapanBtn", function () {
    let id_pengaduan = $(this).val();
    // alert(id_pengaduan);
    // die;
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/pengaduan-masyarakat/petugas/modalTanggapan?id_pengaduan=" + id_pengaduan,
      success: function (response) {
        // var res = jQuery.parseJSON(response);
        // if (res.status == 422) {
        //   alertify.success(res.message);
        // } else if (res.status == 200) {

        //   $("#room_type_id").val(res.data.room_type_id);
        //   $("#facility").val(res.data.facility);
        //   $("#price").val(res.data.price);
        //   $("#room_facility_id").val(res.data.room_type_id);

        $("#modalTanggapan").modal("show");
        // }
      },
    });
  });
  // Lohat Modal
  $(document).on("click", ".modalLihatBtn", function () {
    let id_pengaduan = $(this).val();
    alert(id_pengaduan);
    die;
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/pengaduan-masyarakat/petugas/modalTanggapan?id_pengaduan=" + id_pengaduan,
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if (res.status == 422) {
          alertify.success(res.message);
        } else if (res.status == 200) {

          $("#room_type_id").val(res.data.room_type_id);
          $("#facility").val(res.data.facility);
          $("#price").val(res.data.price);
          $("#room_facility_id").val(res.data.room_type_id);

          // $("#modalLihat").modal("show");
        }
      },
    });
  });

  // Edit Room Facility
  $(document).on("submit", "#editRoomFacility", function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    formData.append("edit_room_facility", true);

    // alert(formData);
    // return false;

    $.ajax({
      type: "POST",
      url: "../../function/function.php",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        var res = jQuery.parseJSON(response);
        console.log(res);
        if (res.status == 422) {
          $("#errorMessageEdit").removeClass("d-none");
          $("#errorMessageEdit").text(res.message);
        } else if (res.status == 200) {
          $("#errorMessageEdit").addClass("d-none");

          alertify.success(res.message);

          $("#roomFacilityEditModal").modal("hide");
          $("#editRoomFacility")[0].reset();

          $("#myTable").load(location.href + " #myTable");
        }
      },
    });
  });

</script>

</body>

</html>