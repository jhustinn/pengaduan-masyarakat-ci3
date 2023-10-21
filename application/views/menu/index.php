                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <a class="btn btn-primary mb-3" data-bs-target="#newMenuModal" data-bs-toggle="modal">Add New Menu</a>

                    <div class="row">
                        <div class="col-lg">
                        <?= form_error('menu', '<div class="alert  alert-danger" role="alert">', '</div>'); ?>
                        <?= $this->session->flashdata('message'); ?>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            <?php foreach($menu as $m) : ?>
                                <tr>
                                  <th scope="row"><?= $i; ?></th>
                                  <td><?= $m['menu']; ?></td>
                                  <td>
                                      <a href="" class="badge badge-success">Edit</a>
                                      <a href="" class="badge badge-danger">Delete</a>
                                  </td>
                                </tr> 
                            <?php $i++; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
            <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="newMenuModalLabel">Add New Menu</h1>
                  </div>
                  <form action="<?= base_url('menu'); ?>" method="post">
                    <div class="modal-body">
                                <div class="form-group">
                                  <input type="text" name="menu" id="menu" class="form-control" placeholder="Menu Name" aria-describedby="helpId">
                                </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>