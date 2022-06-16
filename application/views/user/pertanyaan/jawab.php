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
          <div class="col-md-6">
            <form action="<?= base_url('jawab/' . $id); ?>" method="post">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Jawab Pertanyaan</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <div class="form-control"><?= $nama; ?></div>
                  </div>
                  <div class="form-group">
                    <label>Pertanyaan</label>
                    <textarea class="form-control" rows="4" disabled><?= $pertanyaan; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Jawaban</label>
                    <textarea
                      class="form-control"
                      rows="4"
                      name="jawaban"
                      required
                    ></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Jawab</button>
                </div>
              </div>
              <!-- /.card -->
            </form>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('user/template/footer'); ?>