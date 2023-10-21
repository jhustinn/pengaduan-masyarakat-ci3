                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <a class="btn btn-primary mb-3" data-bs-target="#newRoleModal" data-bs-toggle="modal">Add New Role</a>

                    <div class="row">
                        <div class="col-lg">
                        <?= form_error('menu', '<div class="alert  alert-danger" role="alert">', '</div>'); ?>
                        <?= $this->session->flashdata('message'); ?>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            <?php foreach($role as $r) : ?>
                                <tr>
                                  <th scope="row"><?= $i; ?></th>
                                  <td><?= $r['role']; ?></td>
                                  <td>
                                      <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Access</a>
                                      <a href="" class="badge badge-success">Edit</a>
                                      <a href="<?= base_url('admin/deleterole/') . $r['id']?>" class="badge badge-danger">Delete</a>
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
            <div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="newRoleModalLabel">Add New Role</h1>
                  </div>
                  <form action="<?= base_url('admin/role'); ?>" method="post">
                    <div class="modal-body">
                                <div class="form-group">
                                  <input type="text" name="role" id="role" class="form-control" placeholder="Role Name" aria-describedby="helpId">
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