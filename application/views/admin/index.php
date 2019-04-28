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
            <h1 class="m-0 text-dark">Admin</h1>
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
           <div class="col-md-12">
               <div class="py-4">
                   <a href="<?php echo base_url('Admin/tambah');?>" class="btn btn-primary">Tambah Data</a>
               </div>
              
                <div class="table-responsive">
                <table id="example2" class="table-bordered table-striped">
                  <thead>
                    <tr align="center">
                      <th width="150px">Username</th>
                      <th width="150px">Password</th>
                      <th width="150px">Nama Lengkap</th>
                      <th width="150px">Level</th>
                      <th width="150px">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach($login->result() as $result): ?>
                        <tr>
                          <td><?php echo $result->username ?></td>
                          <td><?php echo $result->password ?></td>
                          <td><?php echo $result->nama_lengkap ?></td>
                          <td><?php echo $result->level ?></td>   
                             <td>
                                <a href="<?php echo site_url('Admin/edit/'.$result->kode_user); ?>" class="btn btn-info btn-xs">edit</a>
                                <a href="<?php echo site_url('Admin/hapus/'.$result->kode_user); ?>" class="btn btn-danger btn-xs">delete</a>
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