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
                   <a href="<?php echo site_url('Admin');?>"
                   <a href="" class="btn btn-warning">Kembali</a>
               </div>

               <h1>Tambah Data Admin</h1>

               <form action="<?php echo site_url('Admin/update');?>" method="post">
               <input type="hidden" name="kode_user" value="<?php echo $login->kode_user; ?>">
                    <div class="form-group row">
                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $login->username; ?>" type="text" class="form-control" id="username" name="username">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                        <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Admin</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $login->nama_lengkap; ?>" type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-6">
                          <select name="level" class="form-control">
                               <option value="admin" <?php if ($login->level == "admin") echo "selected='selected'"?>>Admin</option>
                                <option value="operator" <?php if ($login->level == "operator") echo "selected='selected'"?>>Operator</option>
                                <option value="member" <?php if ($login->level == "member") echo "selected='selected'"?>>Member</option>
                          </select>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                    <label for="simpan" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                </form>
           </div>
        </div>
    </div>
    </div>
  </div>
</body>
 <?php $this->load->view('layout/admin/footer') ?>