<div class="register-box">
  <div class="register-logo">
    <a href="<?= base_url('admin') ?>"><b>Tekotot</b> Maju!</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">
        <?= $title; ?>
      </p>

      <form action="<?= base_url('auth/registration') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="NIK" name="nik" value="<?= set_value('nik') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <?= form_error('nik', '<small class="text-danger pl-3" >', '</small>') ?>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nama" value="<?= set_value('nama') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <?= form_error('nama', '<small class="text-danger pl-3" >', '</small>') ?>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= set_value('alamat') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <?= form_error('nama', '<small class="text-danger pl-3" >', '</small>') ?>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan"
            value="<?= set_value('kecamatan') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <?= form_error('nama', '<small class="text-danger pl-3" >', '</small>') ?>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan"
            value="<?= set_value('kelurahan') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <?= form_error('nama', '<small class="text-danger pl-3" >', '</small>') ?>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="No Telp" name="telp" value="<?= set_value('telp') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <?= form_error('telp', '<small class="text-danger pl-3" >', '</small>') ?>
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username"
            value="<?= set_value('username') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <?= form_error('username', '<small class="text-danger pl-3" >', '</small>') ?>
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password1">
          <div class="input-group-append">
            <div class="input-group-text">
              <?= form_error('password1', '<small class="text-danger pl-3" >', '</small>') ?>
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="<?= base_url('auth/') ?>" class="text-center">I already have a account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->