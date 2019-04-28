
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
            <h1 class="m-0 text-dark">Pemesanan</h1>
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
                    <?php if($this->session->userdata('level') == "admin"): ?>
                   <a href="<?php echo site_url('Pesan/tambah');?>" class="btn btn-primary">Tambah Data</a>
                   <?php endif; ?>
               </div>
              
                <div class="table-responsive">
                <table id="example2" class="table-bordered table-striped">
                        <thead>
                          <tr>
                            <th width="200px">Nama Pelanggan</th>
                            <th width="200px">Alamat</th>
                            <th width="150px">Telepon</th>
                            <th width="350px">Nama Pesanan</th>
                            <th width="100px">Jumlah</th>
                            <?php if($this->session->userdata('level') == "admin"): ?>
                            <th width="150px">Option</th>
                            <?php endif; ?>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pesan ->result() as $result): ?>
                              <tr>
                                    <td><?php echo $result->nama ?></td>
                                    <td><?php echo $result->alamat ?></td>
                                    <td><?php echo $result->telepon ?></td>
                                    <td><?php echo $result->judul ?></td>
                                    <td><?php echo $result->jumlah_pesan ?></td>
                                    <td>
                                      <?php if($this->session->userdata('level') == "admin"): ?>
                                        <a href="<?php echo site_url('Pesan/edit/'.$result->id); ?>" class="btn btn-info btn-xs">edit</a>
                                        <a href="<?php echo site_url('Pesan/hapus/'.$result->id); ?>" class="btn btn-danger btn-xs">delete</a>
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
    </div>
  </div>
</body>
 <?php $this->load->view('layout/admin/footer') ?>