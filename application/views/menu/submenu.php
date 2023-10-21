                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <a class="btn btn-primary mb-3" data-bs-target="#newSubMenuModal" data-bs-toggle="modal">Add New Menu</a>

                    <div class="row">
                        <div class="col-lg">

                        <?php if(validation_errors()) : ?>
                          <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                          </div>
                          <?php endif; ?>
                        <?= $this->session->flashdata('message'); ?>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Url</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Is Active</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            <?php foreach($subMenu as $sm) : ?>
                                <tr>
                                  <th scope="row"><?= $i; ?></th>
                                  <td><?= $sm['title']; ?></td>
                                  <td><?= $sm['menu']; ?></td>
                                  <td><?= $sm['url']; ?></td>
                                  <td><?= $sm['icon']; ?></td>
                                  <td><?= $sm['is_active']; ?></td>
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
            <div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="newSubMenuModalLabel">Add New Sub Menu</h1>
                  </div>
                  <form action="<?= base_url('menu/submenu'); ?>" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Sub Menu title" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                          <option value="">Select Menu</option>
                          <?php foreach($menu as $m) : ?>
                            <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                          <?php endforeach; ?>
                        </select>        
                      </div>
                      <div class="form-group">
                        <input type="text" name="url" id="url" class="form-control" placeholder="Sub Menu url" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                        <input type="text" name="icon" id="icon" class="form-control" placeholder="Sub Menu icon" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" aria-label="Checkbox for following text input" id="is_active" name="is_active" checked>
                        <label class="form-check-label">
                          Active?
                        </label>
                      </div>
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