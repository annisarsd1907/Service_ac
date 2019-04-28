
<?php $this->load->view('layout/admin/header') ?>
<?php $this->load->view('layout/admin/left') ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Promo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service AC</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="py-4">
                  <!-- <?php if ($pesan = $this->session->flashdata('pesan')): ?>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="alert alert-dismissible alert-success">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                              <?php echo $pesan; ?>
                                          </div>
                                      </div>
                                  </div>
                    <?php endif ?> -->
                    <?php if($this->session->userdata('level') == "admin"): ?>
                   <a href="<?php echo site_url('Promo/tambah');?>" class="btn btn-primary">Tambah Data</a>
                   <?php endif; ?>
               </div>
              
                <div class="table-responsive">
                <table id="example2" class="table-bordered table-striped">
                        <thead>
                          <tr>
                            <th width="250px">Judul</th>
                            <th width="150px">Harga</th>
                            <th width="350px">Syarat & Ketentuan</th>
                            <th width="150px">Gambar Barang</th>
                            <?php if($this->session->userdata('level') == "admin"): ?>
                            <th width="150px">Option</th>
                            <?php endif; ?>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($promo ->result() as $result): ?>
                              <tr>
                                    <td><?php echo $result->judul ?></td>
                                    <td><?php echo $result->harga ?></td>
                                    <td><?php echo $result->syarat ?></td>
                                    <td>
                                       <img src="<?php echo base_url("assets/image/upload/".$result->gambar) ?>" width='100' height='100'>
                                      </td>
                                    <td>
                                      <?php if($this->session->userdata('level') == "admin"): ?>
                                        <a href="<?php echo site_url('Promo/edit/'.$result->id); ?>" class="btn btn-info btn-xs">edit</a>
                                        <a href="<?php echo site_url('Promo/hapus/'.$result->id); ?>" class="btn btn-danger btn-xs">delete</a>
                                      <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                      </table>
           </div>
       </div>
    </div>
  </div>
</body>
 <?php $this->load->view('layout/admin/footer') ?>