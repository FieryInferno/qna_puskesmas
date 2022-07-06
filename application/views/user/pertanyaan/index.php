<?php $this->load->view('user/template/header'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                  if ($this->session->success) { ?>
                    <div class="alert alert-success" role="alert">
                      <?= $this->session->success; ?>
                    </div>
                  <?php }
                ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Pertanyaan</th>
                      <th>Jawaban</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;

                      foreach ($pertanyaan as $key) { ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $key->nama; ?></td>
                          <td><?= $key->alamat; ?></td>
                          <td><?= $key->pertanyaan; ?></td>
                          <td><?= $key->jawaban; ?></td>
                          <td>
                            <a href="<?= base_url(); ?>jawab/<?= $key->id; ?>" class="btn btn-primary">Jawab</a>
                            <button
                              type="button"
                              class="btn btn-danger"
                              data-toggle="modal"
                              data-target="#modal<?= $key->id; ?>"
                            >
                              Hapus
                            </button>

                            <div class="modal fade" id="modal<?= $key->id; ?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Konfirmasi Hapus</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="<?= base_url(); ?>jawab/<?= $key->id; ?>/delete" method="post">
                                    <div class="modal-body">
                                      Anda yakin akan menghapus pertanyaan ini?
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                  </form>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                          </td>
                        </tr>
                      <?php }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('user/template/footer'); ?>