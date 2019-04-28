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
            <h1 class="m-0 text-dark">Slide Android</h1>
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
                   <a href="<?php echo site_url('Android');?>"
                   <a href="" class="btn btn-warning"></i> Kembali</a>
               </div>

               <h1>Tambah Data Promo</h1>

          <div>
            <form action="<?php echo base_url('Android/simpan') ?>" method="post" enctype="multipart/form-data"/>
                    <div class="form-group row">
                      <label for="id" class="col-sm-2 col-form-label">Id</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="id" name="id">
                      </div>
                    </div>

                   
                    <div class="form-group row">
                      <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-6">
                          <?php echo form_upload(['name'=>'gambar', 'class'=>'form-control']); ?>
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
</body>
<?php $this->load->view('layout/admin/footer') ?>