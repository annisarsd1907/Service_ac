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
            <h1 class="m-0 text-dark">List Data Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service AC </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <div class="container">
       <div class="row">
           <div class="col-md-12 offset + 1">
               <div class="py-4">
                <?php if($this->session->userdata('level') == "admin"): ?>
                   <a href="<?php echo base_url('Layanan/tambah');?>" class="btn btn-primary">Tambah Data</a> 
                   <?php endif; ?>  
               </div>

              
                <div class="table-responsive">
                <table id="example2" class="table-bordered table-striped">
                  <thead>
                    <tr align="center">
                      <th width="150px">Nama</th>
                      <th width="150px">Telepon</th>
                      <th width="150px">Layanan</th>
                      <th width="150px">Tanggal Service</th>
                      <th width="150px">Jam Service</th>
                      <th width="150px">Jumlah Unit AC</th>
                      <th width="150px">Tipe AC</th>
                      <th width="150px">Merk AC</th>
                      <th width="150px">Tipe Freon</th>
                      <th width="150px">Memiliki Tangga?</th>
                      <th width="150px">Keluhan</th>
                      <th width="150px">Alamat</th>
                      <?php if($this->session->userdata('level') == "admin"): ?>
                      <th width="150px">Option</th>
                      <?php endif; ?>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach($layanan->result() as $result): ?>
                        <tr>
                          <td><?php echo $result->nama_pelanggan ?></td>
                          <td><?php echo $result->telp ?></td>
                          <td><?php echo $result->layanan ?></td>
                          <td><?php echo $result->tanggal_service ?></td>
                          <td><?php echo $result->jam_service ?></td>
                          <td><?php echo $result->jumlah_unit ?></td>
                          <td><?php echo $result->tipe_ac ?></td>
                          <td><?php echo $result->merk_ac ?></td>
                          <td><?php echo $result->tipe_freon ?></td>
                          <td><?php echo $result->memiliki_tangga ?></td>
                          <td><?php echo $result->keluhan ?></td>
                          <td><?php echo $result->alamat ?></td>    
                             <td>
                              <?php if($this->session->userdata('level') == "admin"): ?>
                                <a href="<?php echo site_url('Layanan/edit/'.$result->No); ?>" class="btn btn-info btn-xs">edit</a>
                                <a href="<?php echo site_url('Layanan/hapus/'.$result->No); ?>" class="btn btn-danger btn-xs">delete</a>
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