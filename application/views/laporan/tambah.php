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
            <h1 class="m-0 text-dark">Data Petugas</h1>
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
                   <a href="<?php echo site_url('Laporan');?>"
                   <a href="" class="btn btn-warning">Kembali</a>
               </div>


               <h3>Tambah Data Laporan</h3>

               <form action="<?php echo site_url('Laporan/simpan');?>" method="post">
                    <div class="form-group row">
                      <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Petugas</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="telepon" name="telepon">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-6">
                        <!-- <input type="text" class="form-control" id="status" name="status"> -->
                        <select name="status" class="form-control">
                            <option value="selesai" echo "selected='selected'">Selesai</option>
                            <option value="belum" echo "selected='selected'">Belum Selesai</option>
                            <option value="proses" echo "selected='selected'">Proses</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="No" class="col-sm-2 col-form-label">Id Pelanggan</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="No" name="No">
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
 <?php $this->load->view('layout/admin/footer') ?>