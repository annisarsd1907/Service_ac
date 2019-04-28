

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
            <h1 class="m-0 text-dark">Data Pemesanan</h1>
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
                   <a href="<?php echo site_url('Pesan');?>"
                   <a href="" class="btn btn-warning">Kembali</a>
               </div>
               

               <h3>Tambah Data Pelanggan</h3>

               <form action="<?php echo site_url('Pesan/update');?>" method="post">
               <input type="hidden" name="id" value="<?php echo $pesan->id; ?>">
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $pesan->nama; ?>" type="text" class="form-control" id="nama" name="nama">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $pesan->alamat; ?>" type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $pesan->telepon; ?>" type="text" class="form-control" id="telepon" name="telepon">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="judul" class="col-sm-2 col-form-label">Nama Pesanan</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $pesan->judul; ?>" type="text" class="form-control" id="judul" name="judul">
                        </div>
                    </div>

                     <div class="form-group row">
                      <label for="jumlah_pesan" class="col-sm-2 col-form-label">Jumlah Pesan</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $pesan->jumlah_pesan; ?>" type="text" class="form-control" id="jumlah_pesan" name="jumlah_pesan">
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