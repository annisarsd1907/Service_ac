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
            <h1 class="m-0 text-dark">List Promo Spare Part</h1>
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
                   <a href="<?php echo base_url('Sparepart/tambah');?>" class="btn btn-primary">Tambah Data</a>
                <?php endif; ?>   
               </div>

              
                <div class="table-responsive">
                <table id="example2" class="table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="450px">jenis Sparepart</th>
                      <th width="150px">Harga</th>
                      <?php if($this->session->userdata('level') == "admin"): ?>
                      <th width="150px">Option</th>
                      <?php endif; ?>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach($sparepart->result() as $result): ?>
                        <tr>
                          <td><?php echo $result->jenis ?></td>
                          <td><?php echo $result->harga ?></td> 
                             <td>
                              <?php if($this->session->userdata('level') == "admin"): ?>
                                <a href="<?php echo site_url('Sparepart/edit/'.$result->id); ?>" class="btn btn-info btn-xs">edit</a>
                                <a href="<?php echo site_url('Sparepart/hapus/'.$result->id); ?>" class="btn btn-danger btn-xs">delete</a>
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
  </div>
</body>
 <?php $this->load->view('layout/admin/footer') ?>