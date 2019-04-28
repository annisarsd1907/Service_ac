
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
            <h1 class="m-0 text-dark">List Data Promo Jasa</h1>
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
              <div class="col-md-12">
              <div class="py-4">
                   <a href="<?php echo site_url('Jasa');?>"
                   <a href="" class="btn btn-warning">Kembali</a>
               <h3>Tambah Data Promo Jasa</h3>

               <form action="<?php echo site_url('Jasa/simpan');?>" method="post">
                    <div class="form-group row">
                      <label for="jenis" class="col-sm-2 col-form-label">jenis Jasa</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="jenis" name="jenis">
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="harga" name="harga">
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
  </div>
</div>
</body>
 <?php $this->load->view('layout/admin/footer') ?>